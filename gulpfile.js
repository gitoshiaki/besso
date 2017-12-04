var gulp = require("gulp");
var sass = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");
var plumber = require("gulp-plumber");
var changed  = require('gulp-changed');
var imagemin = require('gulp-imagemin');

var paths = {
  srcCss: "./src/sass/style.scss",
  srcCssArticle: "./src/sass/article.scss",
  pubCss: "./",
  pubCssArticle: "./public/css",
  srcImage: "./src/images/*",
  pubImage: "./public/images",
};

gulp.task("sass", function() {
    gulp.src( paths.srcCss )
        .pipe(plumber())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(gulp.dest( paths.pubCss ));

    gulp.src( paths.srcCssArticle )
        .pipe(plumber())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(gulp.dest( paths.pubCssArticle ));
});

gulp.task('imagemin', function(){
    gulp.src( paths.srcImage )
    .pipe(changed( paths.pubImage ))
    .pipe(imagemin([
        imagemin.gifsicle({interlaced: true}),
        imagemin.jpegtran({progressive: true}),
        imagemin.optipng({optimizationLevel: 5}),
        imagemin.svgo({
          plugins: [
              {removeViewBox: true},
              {cleanupIDs: false}
          ]
        })
    ]))
    .pipe(gulp.dest( paths.pubImage ));
});

gulp.task('watch', function(){
  gulp.watch( ['./src/sass/*.scss','./src/sass/**/*.scss'] ,['sass']);
  gulp.watch( paths.srcImage ,['imagemin']);
});

// 開発中に使用するビルド環境
gulp.task('default', ['watch']);

// 本番環境で実行するビルド
gulp.task('build', ['imagemin','sass']);

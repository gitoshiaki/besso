var gulp = require("gulp");
var sass = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");
var plumber = require("gulp-plumber");
var changed  = require('gulp-changed');
var imagemin = require('gulp-imagemin');

var paths = {};

gulp.task("sass", function() {
    paths.srcCss = "./src/sass/main.scss";
    paths.pubCss = "./public/css";
    gulp.src( paths.srcImage )
        .pipe(plumber())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(gulp.dest( paths.pubCss ));
});

gulp.task('imagemin', function(){
    paths.srcImage = "./src/images/*";
    paths.pubImage = "./public/images";
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
  gulp.watch( paths.srcCss ,['sass']);
  gulp.watch( paths.srcImage ,['imagemin']);
});

gulp.task('default', ['watch']);

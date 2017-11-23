var gulp = require("gulp");
var sass = require("gulp-sass");
var autoprefixer = require("gulp-autoprefixer");
var plumber = require("gulp-plumber");

gulp.task("sass", function() {
    gulp.src("./src/sass/*scss")
        .pipe(plumber())
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(gulp.dest("./public/css"));
});

gulp.task('watch', function(){
  gulp.watch('./src/sass/*scss',['sass']);
});

gulp.task('default', ['sass','watch']);

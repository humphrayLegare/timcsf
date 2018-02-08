'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');




gulp.task('sass', function () {
    return gulp.src('./sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./'));
});




gulp.task('default', function() {
    // place code for your default task here
        gulp.watch('./sass/*.scss', ['sass']);   
});





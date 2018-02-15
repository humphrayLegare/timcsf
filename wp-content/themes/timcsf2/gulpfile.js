'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
// var compass = require('gulp-compass');




gulp.task('sass', function () {
    return gulp.src('./sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./sass'));
});







gulp.task('default', function() {
    // place code for your default task here
        gulp.watch('./sass/*.scss', ['sass']);   
});





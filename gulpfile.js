var gulp = require('gulp');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');
var compass = require('gulp-compass');
var minify = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var clean = require('gulp-clean');
var browserSync = require('browser-sync');
var reload  = browserSync.reload;


// Compass + Autoprefixer + minify CSS
gulp.task('compass', function () {
  gulp.src('./sass/*.scss')
      .pipe(compass({
        css: './css',
        sass: './sass',
        image: './images'
      }))
      .pipe(autoprefixer({
        browsers: ['last 3 versions', 'iOS 7']
      }))
      .pipe(minify())
      .pipe(gulp.dest('./css'));
})
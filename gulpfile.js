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

// Serve task:
// clean temp and min directories, complile everything in bower_components,
// minify JS, compile compass, and reload browser on changes.
gulp.task('serve', ['compass'], function() {
  browserSync({
    proxy: "192.168.33.10"
  });
  gulp.watch("./sass/*.scss", ['compass']);
  gulp.watch("./css/screen.css").on('change', reload);
});

// Serve by default.
gulp.task('default', ['serve']);
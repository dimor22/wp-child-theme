var gulp   = require('gulp');
var sass   = require('gulp-sass');


gulp.watch("./bower_components/bootstrap-sass/assets/stylesheets/**/*.scss", ['sass']);
gulp.watch("./*.html").on('change', browserSync.reload);

// process sass
gulp.task('sass', function () {
  return gulp.src('./bower_components/bootstrap-sass/assets/stylesheets/**/*.scss')
    .pipe(sass())
    .pipe(gulp.dest('./public/css'))
    .pipe(browserSync.stream());
});

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

// Compile Sass to CSS
function compileSass() {
    return gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('dist/css'));
}

// Watch for changes in Sass files
function watch() {
    compileSass(); // Call compileSass() immediately
    gulp.watch('sass/**/*.scss', compileSass);
}

// Export Gulp tasks
exports.compileSass = compileSass;
exports.watch = watch;


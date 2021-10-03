const { src, dest, watch, series } = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const cssnano = require('cssnano');
const terser = require('gulp-terser');
const browserync = require('browser-sync').create();

// Sass Task
function scssTask() {
    return src('assets/scss/style.scss', {sourcemaps: true})
        .pipe(sass())
        .pipe(postcss([cssnano()]))
        .pipe(dest('assets/css', { sourcemap: '.' }));
}

// JavaScript Task
function jsTask() {
    return src('assets/js/script.js', {sourcemaps: true})
        .pipe(dest('assets/js', { sourcemap: '.' }))
}

// Browsersync Task
function browsersyncServe(cb) {
    browserync.init({
        server: {
            baseDir: '.',
            index: 'index.php'
            // proxy: 'http://localhost/devwp'
        }
    });
    cb();
}

function browsersyncReload(cb) {
    browserync.reload();
    cb();
}

// Watch Task
function watchTask() {
    watch('*.php', browsersyncReload);
    watch(['assets/scss/**/*.scss', 'assets/js/**/*.js'], series(scssTask, jsTask, browsersyncReload));
}

// Default Gulp Task
exports.default = series(
    scssTask,
    jsTask,
    browsersyncServe,
    watchTask
);


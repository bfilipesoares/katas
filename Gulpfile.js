var gulp = require('gulp');
var phpspec = require('gulp-phpspec');
var run = require('gulp-run');
var notifier = require('gulp-notify');

gulp.task('test',   function () {
    gulp.src('spec/**/*.php')
        .pipe(run('clear'))
        .pipe(phpspec('', {notify: true}))
        .on('error', notifier.onError ({
            title : 'Error',
            message: 'Tests Failed',
            icon: __dirname + '/tests_failed.png'
        }))
        .pipe(notifier({
            title: 'Success',
            message: 'All tests green!',
            icon: __dirname + '/tests_success.jpg'
        }));
});

gulp.task('watch', function () {
    gulp.watch(['spec/**/*.php', 'src/**/*.php'], ['test']);
});

gulp.task('default', ['test', 'watch']);
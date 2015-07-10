module.exports = function (grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        sass: {
            dist: {
                options: {
                    outputStyle: 'compressed'
                },
                files: {
                    '../../../public_www/assets/css/app.min.css': '../scss/app.scss'
                }
            }
        },
        uglify: {
            minify: {
                files: [ {
                    '../../../public_www/assets/js/app.min.js': '../js/**.js'
                } ]
            }
        },
        watch: {
            grunt: {
                files: ['Gruntfile.js']
            },
            sass: {
                files: [ '../scss/**/*.scss' , '../scss/**/*.scss' ],
                tasks: ['sass']
            },
            uglify: {
                files: [ '../js/**.js' ],
                tasks: ['uglify:minify']
            }
        }
    });
    grunt.loadNpmTasks('grunt-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.registerTask('build', ['sass', 'uglify:minify']);
    grunt.registerTask('default', ['build', 'watch']);
};
module.exports = function (grunt) {

    grunt.initConfig({
        //Get the Package Information
        pkg: grunt.file.readJSON('package.json'),
        //Load Package configuration what you want to do with that package..
        cssmin: {
            combile: {
                files: {
                    'css/main.css': ['css/style.css'],
                },
            },
        },
        //Load Uglify Js Package
        uglify: {
            dist: {
                files: {
                    'js/common.js': ['js/custom.js'],
                },
            },
        },
    });
    //Loading Package reference
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-uglify');

    //init the default Load Function  
    grunt.registerTask('default', ['cssmin', 'uglify']);
};
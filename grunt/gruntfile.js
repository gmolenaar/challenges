module.exports = function(grunt){
    //add configuration, tasks and plugin here


grunt.initConfig({

    // imports the config data from the package.json
    pkg: grunt.file.readJSON('package.json'),

    watch: {
            files: 'assets/sass/**/*.scss',
            tasks: ['sass'],
            options: {
              livereload: true,
            },
        },

        sass: {
               
                dist: {
                    files: {
                        'assets/css/style.css': 'assets/sass/style.scss'
                    }
                }
            }

        cssmin: {
            files: 'assets/sass/**/*.scss',
            tasks: ['cssmin'],
            options: {
            },
        },

});

// Load the Grunt plugins.
grunt.loadNpmTasks('grunt-contrib-sass');
grunt.loadNpmTasks('grunt-contrib-watch');
grunt.loadNpmTasks('grunt-contrib-cssmin');


// Register the default tasks.
grunt.registerTask('default', ['watch', 'sass', 'cssmin']);
};
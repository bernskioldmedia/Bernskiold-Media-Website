module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		uglify: {
			build: {
				src: 'javascripts/scripts.js',
				dest: 'javascripts/scripts.min.js'
			}
		},

		autoprefixer: {
         dist: {
            files: {
               'stylesheets/layout.css': 'stylesheets/layout.css'
            }
         }
      },

		sass: {
			dist: {
				options: {
					style: 'compressed',
					sourcemap: true,
				},
				files: {
					'stylesheets/layout.css': 'sass/layout.scss'
				}
			}
		},

		watch: {
			options: {
				livereload: true,
			},
			scripts: {
				files: ['javascripts/*.js'],
				tasks: ['uglify'],
				options: {
					spawn: false,
				}
			},
			css: {
				files: [
					'sass/*.scss',
				],
				tasks: [ 'sass', 'autoprefixer' ],
				options : {
					spawn: false,
				}
			}
		},

	});

	// Load Plugins
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-autoprefixer');

	// Run!
	grunt.registerTask('default', ['sass', 'uglify', 'watch']);

}
module.exports = function(grunt) {

	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),

		concat: {
		    options: {
		      separator: ';',
		    },
		    dist: {
		      src: ['javascripts/plugins/foundation/foundation.js', 'javascripts/jquery.mixitup.min.js', 'javascripts/main.js'],
		      dest: 'javascripts/bmedia.js',
		    },
		},

		uglify: {
			build: {
				src: 'javascripts/bmedia.js',
				dest: 'javascripts/bmedia.min.js'
			}
		},

		autoprefixer: {
         dist: {
            files: {
               'stylesheets/layout.css': 'stylesheets/layout.css'
            }
         }
      },

		compass: {
			dist: {
			  options: {
			    sassDir: 'sass',
			    cssDir: 'stylesheets',
			    environment: 'production',
			    outputStyle: 'compressed'
			  }
			},
	   },

		watch: {
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
				tasks: [ 'compass', 'autoprefixer' ],
				options : {
					spawn: false,
				}
			}
		},

	});

	// Load Plugins
	grunt.loadNpmTasks('grunt-contrib-uglify');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-autoprefixer');
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-contrib-concat');

	// Run!
	grunt.registerTask('default', ['compass', 'concat', 'uglify', 'watch']);

}
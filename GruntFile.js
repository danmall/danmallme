module.exports = function(grunt) {

	// Project configuration
	grunt.initConfig({

		// Dependencies
		pkg: grunt.file.readJSON('package.json'),

		/*embed: {
			site: {
				files: {
					'index.php': 'index.uncompressed.php',
					'terms/index.php': 'terms/index.uncompressed.php'
				}
			}
		},*/
		sass: {                              // Task
			dist: {                            // Target
				options: {                       // Target options
					outputStyle: 'compressed'
				},
			  	files: {                         // Dictionary of files
			    	'-/c/main.css'			: 	'-/c/_scss/main.scss'       // 'destination': 'source'
			    	//'/-/c/project-enhanced.css'	: 	'www/-/c/_scss/enhanced.scss',       // 'destination': 'source'
			    	//'/-/c/ie.css'			: 	'www/-/c/_scss/ie.scss'       // 'destination': 'source'
			  	}
			}
		},

		/*concat: {   
		    dist: {
		        src: [
		        	'www/-/j/libs/*.js',
		            'www/-/j/_source/*.js' // All JS in the _source folder		            
		            //'js/global.js'  // This specific file
		        ],
		        dest: 'www/-/j/project.js'
		    }
		},*/

		/*uglify: {
		    build: {
		        src: 'www/-/j/project.js',
		        dest: 'www/-/j/project.min.js'
		    }
		},*/

		watch: {
			sass: { 
				files: ['-/c/_scss/*.scss'],
				//tasks: ['sass', 'embed']
				tasks: ['sass']
			}
			/*scripts: {
		        files: ['www/-/j/_source/*.js'],
		        //tasks: ['concat', 'uglify', 'embed'],
		        options: {
		            spawn: false,
		        },
		    },
		    html: {
		    	files: ['index.uncompressed.php', 'terms/index.uncompressed.php'],
		    	tasks: ['embed']
		    }*/
		}
	});

	// Tasks
	grunt.loadNpmTasks('grunt-contrib-compass');
	grunt.loadNpmTasks('grunt-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	//grunt.loadNpmTasks('grunt-contrib-uglify');
	//grunt.loadNpmTasks('grunt-contrib-concat');
	//grunt.loadNpmTasks('grunt-embed');
	//grunt.loadNpmTasks('grunt-criticalcss');

	// Task configuration
	//grunt.registerTask('default', ['sass', 'concat', 'uglify', 'embed', 'watch']);
	//grunt.registerTask('default', ['sass', 'embed', 'watch']);
	//grunt.registerTask('default', ['sass', 'watch', 'criticalcss']);
	grunt.registerTask('default', ['sass', 'watch']);

}
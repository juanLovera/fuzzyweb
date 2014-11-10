$('#summernote').summernote({
                    width: 840,
                    height: 500,
                    codemirror: { // codemirror options
                      theme: 'monokai'
                    }
                  });

var postForm = function() {
	var content = $('textarea[name="content"]').html($('#summernote').code());
}
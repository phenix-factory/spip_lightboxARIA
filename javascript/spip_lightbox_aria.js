$(function () {
    $(".mediabox, a[type='image/jpeg'], a[type='image/png'], a[type='image/gif']").ariaLightbox({
        altText: function() {
					  return $(this).attr("title");
				},
				descText: function() {
					  return $(this).attr("title");
				},
				titleText: function() {
					return $(this).attr("title");
				},
				useDimmer: true,
				pos: "auto",
				em: false
    });
});

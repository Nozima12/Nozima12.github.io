$(document).ready(function() {
			$('.search').keyup(function() {
				var keyword = $(this).val();
				$.ajax({
					type: "POST",
					url: "rest.php",
					data: {keyword: keyword},
					success: function(data) {
						var resultat = JSON.parse(data);
						if(typeof resultat.error != "undefined") {
							if(resultat.error == false && resultat.results.length > 0) {
								var output = '<ul class="search-result">';
								$.each(resultat.results, function(i, val){
										$('.search-result').remove();
										output += '<li class="search-item"><a href="create_order.php?ticket_id=' + val.id + '">' + val.title + '</li>';
								});
								output += '</ul>';
								$('.result').after(output);
							} else {
								$('.search-result').remove();
							}
						}
					}
				});
			});
		});
$(function() {
			$('#onglets').click(function(event) {
				var actuel = event.target;
				if (!/li/i.test(actuel.nodeName) || actuel.className.indexOf('active') > -1) {
					return;
				}
				$(actuel).addClass('active').siblings().removeClass('active');
				setDisplay();
			});
			function setDisplay() {
				var modeAffichage;
				$('#onglets li').each(function(rang) {
					modeAffichage = $(this).hasClass('active') ? '' : 'none';
					$('.eacontent').eq(rang).css('display', modeAffichage);
				});
			}
			setDisplay();
});


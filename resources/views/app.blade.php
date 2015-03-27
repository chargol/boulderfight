<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>Eifelblock - Wettkampf</title>

	
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="/css/pickadate/default.css">
	<link rel="stylesheet" type="text/css" href="/css/pickadate/default.date.css">

</head>

<body id="csstyle">
	
	<div class="page">
		@yield('app.content')
	</div>

	<script type="text/javascript" src="/js/jquery.js"></script>
	<script type="text/javascript" src="/js/picker.js"></script>
	<script type="text/javascript" src="/js/picker.date.js"></script>

	<script type="text/javascript">
		// $('#birthday').pickadate({
		// 	// Strings and translations
		// 	monthsFull: ['Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember'],
		// 	monthsShort: ['Jan', 'Feb', 'März', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez'],
		// 	weekdaysFull: ['Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag'],
		// 	weekdaysShort: ['So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa'],
		// 	showMonthsShort: undefined,

		// 	// Buttons
		// 	today: 'Heute',
		// 	clear: 'Reset',
		// 	close: 'Abbrechen',

		// 	// Accessibility labels
		// 	labelMonthNext: 'Nächster Monat',
		// 	labelMonthPrev: 'Vorheriger Monat',
		// 	labelMonthSelect: 'Wähle einen Monat',
		// 	labelYearSelect: 'Wähle ein Jahr',

		// 	// Formats
		// 	format: 'dd/mm/yyyy',
		// });
	</script>
	
</body>

</html>
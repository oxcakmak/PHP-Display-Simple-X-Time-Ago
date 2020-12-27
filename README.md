<h1>PHP Display simple X Time Ago<h1>

Default text string<br>
Fixed variable part (Will not be changed)<br>
```
$searchTimeAgo = [
    "%yearAgo%",
    "%monthAgo%",
    "%dayAgo%",
    "%hourAgo%",
    "%minuteAgo%",
    "%justNow%"
];
```
The text string to be replaced (The array elements in the top line to be replaced)<br>
For example, for the German language "vor x Stunden"<br>
```
$timeSpanLang = [
    $lang['t_time_ago_year_lowercase'],
    $lang['t_time_ago_month_lowercase'],
    $lang['t_time_ago_day_lowercase'],
    $lang['t_time_ago_hour_lowercase'],
    $lang['t_time_ago_minute_lowercase'],
    $lang['t_time_ago_now_lowercase']
];
```
Last date / Text to replace / Language text string<br>
```echo calcTimeSpan("26.12.2020-14:50", $searchTimeAgo, $timeSpanLang);<br><br>```
Output: "23 Hours ago"

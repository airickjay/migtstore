<?php
  function get_event_data($atts) {
    $feedUrl = "http://drupal.michigangt.com/migtstoreeventfeed";
    $eventJson = file_get_contents($feedUrl);
    $eventObj = json_decode($eventJson);


    foreach($eventObj as $eo) {
      //echo('atts '.$atts['id']);
      //echo('feed '.$eo->{'event_id'});
      if($atts['id'] == $eo->{'event_id'} && $atts['type'] == 'data') {
        $eventInfo = "<p>Registration time: {$eo->{'event_registration'}}<br />";

        if($eo->{'day2_start'} != '') {
          $eventInfo .= "Day 1 start date and time: {$eo->{'day1_start'}}<br />";
          $eventInfo .= "Day 2 start date and time: {$eo->{'day2_start'}}";
        }
        else {
          $eventInfo .= "Event start date and time: {$eo->{'day1_start'}}<br />";
        }
        $eventInfo .= "</p>";
      }

      elseif($atts['id'] == $eo->{'event_id'} && $atts['type'] == 'description') {
        $eventDesc = strip_tags(html_entity_decode($eo->{'field_event_description'}),"<br><a><p><ul><ol><li>");
        $eventInfo = "<p>{$eventDesc}</p>";
      }

    }


    return($eventInfo);
  }
?>

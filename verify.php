<?php$access_token = '6rBjXl74WlI9eJhVIcEwvaVIeX6yoosoz4WzTjgpHuNvseV1sYrtWiFDsW26TkhP8AUwJavtILwdmuHqgggq7+8USaaVQRcU3tFeaNbV6zWabqvzLl+rNQeORI4bzk4oY8XhfOmSA4NQ6XQixlYuQQdB04t89/1O/w1cDnyilFU=';$url = 'https://api.line.me/v1/oauth/verify';$headers = array('Authorization: Bearer ' . $access_token);$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);$result = curl_exec($ch);curl_close($ch);echo $result;
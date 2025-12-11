<?php
header('Content-Type: application/rss+xml; charset=utf-8');
readfile(__DIR__ . '/rss.xml');

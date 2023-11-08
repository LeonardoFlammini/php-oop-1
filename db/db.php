<?php

$movies = [
  new Movie ("Django", "2012", ["western","splatter"], new Media ("django.jpg", "django poster")),
  new Movie ("whiplash", "2014", ["drama,music"], new Media ("whiplash.jpg", "whiplash poster")),
  new Movie ("Qualcuno volò sul nido del cuculo", "1975", ["drama"], new Media ("qvsnc_poster.jpg", "qvsnc poster")),
  new Movie ("MIxed by erry", "2023", ["Bio,drama"], new Media ("mbe.jpg", "mbe poster"))
];

$series = [
  new SerieTv ("Peaky Blinders", "2011", ["Storico,drama"], new Media ("peaky.jpg", "peaky poster")),
  new SerieTv ("Sons of anarchy", "2008", ["drama"], new Media ("sons-of-anarchy.jpg", "soa poster")),
  new SerieTv ("Peaky Blinders", "2011", ["Storico,drama"], new Media ("peaky.jpg", "peaky poster")),
  new SerieTv ("Sons of anarchy", "2008", ["drama"], new Media ("sons-of-anarchy.jpg", "soa poster"))
];
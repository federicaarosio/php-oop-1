<?php

$movie1 = new Movie('Stand by me', ['drama', 'adventure'], 'Rob Reiner', '"Stand by Me" is a coming-of-age film based on Stephen King\'s novella. Set in the 1950s, it follows four boys on a journey to find the body of a missing boy, exploring themes of friendship, adventure, and the challenges of adolescence');

$movie2 = new Movie('Little Women', ['drama', 'historical'], 'Greta Gerwig', 'In Greta Gerwig\'s adaptation of "Little Women," the four March sisters—Jo, Meg, Amy, and Beth—navigate the challenges of womanhood and pursue their individual dreams against the backdrop of the American Civil War. The film\'s interwoven narrative provides a refreshing contemporary perspective on Louisa May Alcott\'s beloved literary classic.');

$movie3 = new Movie('Le otto montagne', ['drama', ], 'Felix Van Groeningen', 'In the film adaptation of Paolo Cognetti\'s "Le otto montagne" ("The Eight Mountains"), the story unfolds around the complex friendship between two boys, Pietro and Bruno, who come from different worlds but find solace and understanding in the mountains of the Italian Alps. The narrative explores themes of nature, identity, and the enduring impact of personal connections.');

$movie4 = new Movie('Invictus', ['drama', 'biography', 'sport'], 'Clint Eastwood', '"In Invictus," directed by Clint Eastwood, Nelson Mandela, portrayed by Morgan Freeman, uses the South African rugby team, captained by Francois Pienaar (Matt Damon), as a unifying force to help bridge racial divides in post-apartheid South Africa during the 1995 Rugby World Cup. The film portrays Mandela\'s strategic leadership and the team\'s inspiring journey to unite a nation through the universal language of sports.');


$moviesList = [$movie1, $movie2, $movie3, $movie4];
// var_dump($moviesList);
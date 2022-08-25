<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <!--including style.css-->
    <link rel="stylesheet" href="styles.css">
   
   <style></style>
</head>

<body>
    <!--bootsrap links-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    
    <!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">


    

<!--navbar starts-->
<div class="container-fluid">
    <div class="row">
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <b><a class="navbar-brand" href="#">MemeX</a></b>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link mx-2" href="index.php#home" target="_blank">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="index.php#about" target="_blank">ABOUT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="index.php#explore" target="_blank">EXPLORE</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="feed.php" target="_blank">FEEDBACK</a>
        </li>
        <li class="nav-item">
          <a class="nav-link mx-2" href="#" data-bs-toggle="modal" data-bs-target="#out" >LOGOUT</a>
        </li>
      </ul>
</div>
</div>
 </nav>
</div>
</div>
<!--navbar ends-->
<!--logout modal starts-->
<div class="modal fade" id="out" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="color:rgb(80,31,126);">LOGOUT</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" style="font-size:20px;">
        Are You Sure To Exit ?
      </div>
      <div class="modal-footer">
        
        <button type="button" class="btn" style="background-color:rgb(80,31,126);" data-bs-dismiss="modal"><a href="#" style="text-decoration:none;color:white;">NO</a></button>
        <button type="button" class="btn" style="background-color:rgb(80,31,126);"><a href="logout.php" style="text-decoration:none;color:white;">YES</a></button>
      </div>
    </div>
  </div>
</div>
<!--logout modal ends-->


<!--1st division-->
<div class="b2">
<div class="index1">
    
    <a href="emoji.php" class="content1" target="_blank">Emoji</a>
  <a href="hand.php" class="content1" target="_blank">Gestures</a>
  <a href="plant.php" class="content1" target="_blank">Plants</a>
  <a href="animal.php" class="content1" target="_blank">Animals</a>
  <a href="sports.php" class="content1" target="_blank">Sports</a>
  <a href="instruction.php" class="content1" target="_blank">Instructions</a>
  <a href="love.php" class="content1" target="_blank">Greet</a>
  </div>
  </center>
</div>
</div>

<!--table-->
<div class="container t">
  <h2 style="text-align:center;">Animals</h2><br>                                                                             
  <div class="table-responsive">          
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>SR.NO.</th>
        <th>EMOJI</th>
        <th>MEANING</th>
      </tr>
    </thead>

    <tbody>
      <tr>
        <td>1</td>
        <td>&#128018</td>
        <td>A monkey, depicated as a cartoon-styled monkey with cheeky facial expression.</td>
      </tr>
      <tr>
        <td>2</td>
        <td>&#128584</td>
        <td>The see no evil monkey.</td>
      </tr>
      <tr>
        <td>3</td>
        <td>&#128585</td>
        <td>The hear no evil monkey.</td>
      </tr>
      <tr>
        <td>4</td>
        <td>&#128586</td>
        <td>The speak no evil monkey.</td>
      </tr>
      <tr>
        <td>5</td>
        <td>&#129409</td>
        <td>A friendly, cartoon-styles face of lion, used with an affectionate tone.</td>
      </tr>
      <tr>
        <td>6</td>
        <td>&#129410</td>
        <td>A scorpion.</td>
      </tr>
      <tr>
        <td>7</td>
        <td>&#129411</td>
        <td>A turkey, may be consumed in the from of poultry leg.</td>
      </tr>
      <tr>
        <td>8</td>
        <td>&#129412</td>
        <td>A face of a unicorn, convey fantasy, uniqueness, peace and love.</td>
      </tr>
      <tr>
        <td>9</td>
        <td>&#129413</td>
        <td>A bald eagle, used for other eagles and birds of prey(e.g., hawks).</td>
      </tr>
      <tr>
        <td>10</td>
        <td>&#129414</td>
        <td>Quack! A duck.</td>
      </tr>
      <tr>
        <td>11</td>
        <td>&#129415</td>
        <td>A bat, used in Halloween, vampires, and batman.</td>
      </tr>
      <tr>
        <td>12</td>
        <td>&#129416</td>
        <td>A dolphin, used for concerning swimming, oceans, beaches, and summer fun.</td>
      </tr>
      <tr>
        <td>13</td>
        <td>&#129417</td>
        <td>An owl, represent the wisdom.</td>
      </tr>
      <tr>
        <td>14</td>
        <td>&#129418</td>
        <td>A catoon-styled tiger, used with a more affectionate tone.</td>
      </tr>
      <tr>
        <td>15</td>
        <td>&#129419</td>
        <td>A butterfly, represent ideas of beauty and happiness.</td>
      </tr>
      <tr>
        <td>16</td>
        <td>&#129420</td>
        <td>A deer, represent antelope, especially in Christmas.</td>
      </tr>
      <tr>
        <td>17</td>
        <td>&#129421</td>
        <td>A gorilla.</td>
      </tr>
      <tr>
        <td>18</td>
        <td>&#129422</td>
        <td>A lizard.</td>
      </tr>
      <tr>
        <td>19</td>
        <td>&#129423</td>
        <td>A rhinoceros.</td>
      </tr>
      <tr>
        <td>20</td>
        <td>&#129424</td>
        <td>A shrimp, may be consumed in the form of fried shrimp.</td>
      </tr>
      <tr>
        <td>21</td>
        <td>&#129425</td>
        <td>A squid, an octopus-like sea animal with ten arms.</td>
      </tr>
      <tr>
        <td>22</td>
        <td>&#128063</td>
        <td>A chipmunk. represent a squirrel.</td>
      </tr>
      <tr>
        <td>23</td>
        <td>&#129427</td>
        <td>A zebra.</td>
      </tr>
      <tr>
        <td>24</td>
        <td>&#129428</td>
        <td>A brown beaver.</td>
      </tr>
      <tr>
        <td>25</td>
        <td>&#129429</td>
        <td>A sauropod, represents various dinosaurs.</td>
      </tr>
      <tr>
        <td>26</td>
        <td>&#129430</td>
        <td>A tyrannosaurus.</td>
      </tr>
      <tr>
        <td>27</td>
        <td>&#129431</td>
        <td>A cricket, a hopping insect that makes a chirping sound.</td>
      </tr>
      <tr>
        <td>28</td>
        <td>&#128000</td>
        <td>A rat.</td>
      </tr>
      <tr>
        <td>29</td>
        <td>&#128001</td>
        <td>A mouse.</td>
      </tr>
      <tr>
        <td>30</td>
        <td>&#128002</td>
        <td>An ox.</td>
      </tr>
      <tr>
        <td>31</td>
        <td>&#128003</td>
        <td>A Buffalo.</td>
      </tr>
      <tr>
        <td>32</td>
        <td>&#128004</td>
        <td>A cow, used to represent its food product.</td>
      </tr>
      <tr>
        <td>33</td>
        <td>&#128005</td>
        <td>A tiger.</td>
      </tr>
      <tr>
        <td>34</td>
        <td>&#128006</td>
        <td>A leopard, sometimes represent jaguars, panthers, cheetahs, and related cat.</td>
      </tr>
      <tr>
        <td>35</td>
        <td>&#128007</td>
        <td>A rabbit.</td>
      </tr>
      <tr>
        <td>36</td>
        <td>&#128008</td>
        <td>A domestic cat.</td>
      </tr>
      <tr>
        <td>37</td>
        <td>&#128009</td>
        <td>A dragon</td>
      </tr>
      <tr>
        <td>38</td>
        <td>&#128010</td>
        <td>A crocodile</td>
      </tr>
      <tr>
        <td>39</td>
        <td>&#128011</td>
        <td>A whale</td>
      </tr>
      <tr>
        <td>40</td>
        <td>&#128012</td>
        <td>A snail, a slow-moving, represent a slug and various senses of slow.</td>
      </tr>
      <tr>
        <td>41</td>
        <td>&#128013</td>
        <td>A snake, represents various type of snakes. </td>
      </tr>
      <tr>
        <td>42</td>
        <td>&#128014</td>
        <td>A horse, may be used as a compliment to an attractive person.</td>
      </tr>
      <tr>
        <td>43</td>
        <td>&#128015</td>
        <td>A ram, a male sheep.</td>
      </tr>
      <tr>
        <td>44</td>
        <td>&#128016</td>
        <td>A goat.</td>
      </tr>
      <tr>
        <td>45</td>
        <td>&#128017</td>
        <td>A ewe, a female sheep.</td>
      </tr>
      <tr>
        <td>46</td>
        <td>&#128062</td>
        <td>A pair of paw prints, a left by a pet cat or dog.</td>
      </tr>
      <tr>
        <td>47</td>
        <td>&#128019</td>
        <td>A rooster(coak).</td>
      </tr>
      <tr>
        <td>48</td>
        <td>&#128020</td>
        <td>A chicken, a bird used for its meat and eggs.</td>
      </tr>
      <tr>
        <td>49</td>
        <td>&#128021</td>
        <td>A dog.</td>
      </tr>
      <tr>
        <td>50</td>
        <td>&#128022</td>
        <td>A pig.</td>
      </tr>
      <tr>
        <td>51</td>
        <td>&#128023</td>
        <td>A boar, a hairy wild pig with tusks.</td>
      </tr>
      <tr>
        <td>52</td>
        <td>&#128024</td>
        <td>An elephant.</td>
      </tr>
      <tr>
        <td>53</td>
        <td>&#128025</td>
        <td>An octopus, a sea animal with eight legs.</td>
      </tr>
      <tr>
        <td>54</td>
        <td>&#128061</td>
        <td>The snout(nose) of a pig.</td>
      </tr>
      <tr>
        <td>55</td>
        <td>&#128027</td>
        <td>A bug, or insect, depicated as a caterpillar, which becomes a butterfly.</td>
      </tr>
      <tr>
        <td>56</td>
        <td>&#128028</td>
        <td>An ant.</td>
      </tr>
      <tr>
        <td>57</td>
        <td>&#128029</td>
        <td>A honey bee that lives in a hive and makes honey.</td>
      </tr>
      <tr>
        <td>58</td>
        <td>&#128030</td>
        <td>A ladybug.</td>
      </tr>
      <tr>
        <td>59</td>
        <td>&#128031</td>
        <td>A common fish.</td>
      </tr>
      <tr>
        <td>60</td>
        <td>&#128032</td>
        <td>A tropical fish.</td>
      </tr>
      <tr>
        <td>61</td>
        <td>&#128033</td>
        <td>A blowfish (puffer).</td>
      </tr>
      <tr>
        <td>62</td>
        <td>&#128034</td>
        <td>A turtle, a slow moving reptile witha shell.</td>
      </tr>
      <tr>
        <td>63</td>
        <td>&#128035</td>
        <td>A baby chicken (chick).</td>
      </tr>
      <tr>
        <td>64</td>
        <td>&#128036</td>
        <td>A yellow baby chicken (chick).</td>
      </tr>
      <tr>
        <td>65</td>
        <td>&#128037</td>
        <td>A front-facing baby chicken (chick).</td>
      </tr>
      <tr>
        <td>66</td>
        <td>&#128038</td>
        <td>A generic bird, represents variety of birds.</td>
      </tr>
      <tr>
        <td>67</td>
        <td>&#128039</td>
        <td>A penguin, a flightless bird adapted to water and ice.</td>
      </tr>
      <tr>
        <td>68</td>
        <td>&#128056</td>
        <td>A frog.</td>
      </tr>
      <tr>
        <td>69</td>
        <td>&#128058</td>
        <td>The face of a wolf.</td>
      </tr>
    </tbody>

  </table>
  </div>
</div>

<!--space-->
<div class="space"></div>
</body>
</html>



<?php


/* 
 * @package Adonai Reigns 
 */


/*
Copyright (C) 2019  www.Adonai-Reigns.life

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <https://www.gnu.org/licenses/>.
*/

if ( ! defined( 'ABSPATH' ) ) {
    exit();
}


global $adonai_reigns_autoupdate_init_content;

$adonai_reigns_autoupdate_init_content = new stdClass();


$adonai_reigns_autoupdate_init_content->booklet_height = 650;
$adonai_reigns_autoupdate_init_content->booklet_width = 400;




$adonai_reigns_autoupdate_init_content->version = '0.0.1';
$adonai_reigns_autoupdate_init_content->lang_iso = 'en_nz';
    
    /**
     * $script 
     * The code that is entered into the page that initialises the javascript to assemble the booklet
     * Configuration values to be replaced at runtime:
     * __ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__ : root location of assets, stylesheets and scripts
     * @var type text
     */
$adonai_reigns_autoupdate_init_content->body_script = array();
    
$adonai_reigns_autoupdate_init_content->body_script['en_nz'] = <<<TPL
<script>
 // © The Gospel, by Adonai Reigns ("God did not send His son to condemn the world!") - Share The Gospel on your website! Go to www.Adonai-Reigns.life/tools
 jQuery(document).on('ready', function(){
 (function(a,m,e,n){var w=window,d=document;w['TheGospelObject']=a;
 w[a]=w[a]||function(){(w[a].q=w[a].q||[]).push(arguments)},w[a].l=1*new Date();
 w[a].s=function(f,s,hs){var j,c;s=s||'text/javascript',hs=hs||null;j=d.createElement('script');
 j.crossorigin=1;j.type=s;if(hs!==null)j.id=hs;c=d.getElementsByTagName('script')[0];
 j.async=1;j.src=f;c.parentNode.insertBefore(j,c);};
 w[a].l=function(h,o,l,y){var j,c;j=d.createElement('link');j.crossorigin=1;j.rel=o||'stylesheet';
 l=l||null;if(l!==null)j.id=l;j.onload=y||function(){};c=d.getElementsByTagName('script')[0];
 j.async=1;j.href=h;c.parentNode.insertBefore(j,c);};
 w[a].s(m);w[a].l(e);w[a].s(n);
 })('TheGospel','__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/js/the-gospel.js',
 '__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/css/sz-booklet.css','__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/js/sz-booklet.js');
 TheGospel('pourInto', '.the-heart');
 });
</script>
TPL;

    /**
     * $body 
     * The code that is entered into the page that creates the container and contents of the booklet
     * Configuration values to be replaced at runtime:
     * __ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__ : root location of assets, stylesheets and scripts
     * __ADONAI_REIGNS_LIFE_HOMEPAGE_URL__ : url to the home page
     * __ADONAI_REIGNS_LIFE_HOMEPAGE_NAME__ : name of the home page (eg: site name)
     * __ADONAI_REIGNS_LIFE_GOSPEL_BOOKLET_CONFIG_HEIGHT__ : the height of the booklet, in pixels
     * __ADONAI_REIGNS_LIFE_GOSPEL_BOOKLET_CONFIG_WIDTH__ : the width of the booklet, in pixels
     * @var type text
     */
$adonai_reigns_autoupdate_init_content->body_content = array();
    
$adonai_reigns_autoupdate_init_content->body_content['en_nz'] = <<<TPL
<!-- © The Gospel, by Adonai Reigns ("God did not send His son to condemn the world!") - Share The Gospel on your website! Go to www.Adonai-Reigns.life/tools -->
<div class="the-heart" style="height:__ADONAI_REIGNS_LIFE_GOSPEL_BOOKLET_CONFIG_HEIGHT__px;width:__ADONAI_REIGNS_LIFE_GOSPEL_BOOKLET_CONFIG_WIDTH__px;overflow:hidden;position:relative;font-family:sans-serif;">
   
  <!-- Copyright Content : www.Adonai-Reigns.life -->

  <div class="ar-booklet ar-booklet-nojs">

    <div class="shunt left"><div class="btn">&lt;</div></div>
    <div class="shunt right"><div class="btn">&gt;</div></div>

    <div class="nav">
      <div class="btn prev">&lt;</div>
      <div class="page-number"></div>
      <!--                    <div class="menu-button"><img src="__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/icon/burger.png" alt="Menu" width="40" height="40" /></div>-->
      <div class="menu-button"><p>.. loading menu ..</p><div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div></div>                    
      <div class="btn next">&gt;</div>
    </div>

    <div class="toc">
      <h1 class="site-name"><a title="Return to the Home Page" href="__ADONAI_REIGNS_LIFE_HOMEPAGE_URL__"><img alt="Icon: 'Home'" src="__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/icon/home-puffing-love.png" width="40" height="40" style="margin: 12px 12px -6px 0" />__ADONAI_REIGNS_LIFE_HOMEPAGE_NAME__</a></h1>
      <div class="action-bar">
        <ul>
          <li class="toggle-transcript"><a href="javascript: void(null);" title="View Transcript" class="icon toggle-transcript"><img src="__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/icon/quotation-marks-stroke.png" width="36" height="36" alt="Icon: transcript" /></a></li>
          <li class="translate"><div id="ytWidget"></div></li>



          <!-- Go to www.addthis.com/dashboard to customize your tools -->
          <li class="social-buttons"><!-- Go to www.addthis.com/dashboard to customize your tools -->
            <div class="addthis_inline_share_toolbox_ligi"></div></li>

        </ul>
      </div>
      <ol class="toc-items"></ol>
    </div>

    <div class="pages">

      <div class="page" title="Front Cover" id="front-cover">

        <h2 class="page-title">The Gospel</h2>
        <div class="transcripts">

          <blockquote>
            <p>My Sheep Hear My Voice</p>
            <footer><cite>Jesus Christ</cite></footer>
          </blockquote>

        </div>

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/cover-butterfly-front.jpg')"></div>


      </div>



      <div class="page double" title="Intro" id="intro">

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/intro.jpg')"></div>    


        <div class="transcripts">
          <div class="transcript left">
            <blockquote>
              <p>The man has become like one of us, discerning good and evil. Now, in case he also takes to eat from the tree of life, and lives forever..
                So The Lord God drove the man out of the garden, guarding the way to the tree of life.</p>
              <footer class="print-only"><cite>Genesis 3:22-24</cite></footer>
            </blockquote>
            <blockquote>
              <p>To the one overcoming, I will give to him to eat of the tree of life which is in the paradise of God.</p>
              <footer><cite>Jesus Christ, Revelation 2:7</cite></footer>
            </blockquote>

          </div>
          <div class="transcript right">
            <blockquote>
              <p>Some are confusing you and want to distort the good news of Christ.</p>
              <footer><cite>St. Paul, Galatians 1:8-9</cite></footer>
            </blockquote>
            <p>Over the last two thousand years, people have twisted the meaning of scriptures to suit their own way of living, instead of changing their
              own way of living to reflect what the scriptures teach <span class="reference">2 Peter 3:16</span>. That is why so many Christians nowadays
              do not agree with each other <span class="reference">2 Peter 2:1-2</span>. It is confusing for people
              who rightly expect that God's people should be united and showing the character of Christ <span class="reference">1 Corinthians 14:33</span>.</p>
          </div>
        </div>

      </div>


      <div class="page double" title="Born Again!" id="born-again">

        <h2 class="page-title">Born Again!</h2>

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/born-again.jpg')"></div>    

        <div class="transcripts">
          <div class="transcript left">
            <blockquote>
              <p>Whoever hears my Word and trusts the one who sent me, has eternal life. He does not come into judgement, but has passed over
                from death to life.</p>
              <footer><cite>Jesus Christ, John 5:24</cite></footer>
            </blockquote>
          </div>
          <div class="transcript right">
            <p>When people are spiritually well, they have the qualities of godliness: love, grace, righteousness etc. That is because we are made for the spirit of God to live in us </p>
            <p>Some people are not like that though. They are mean, selfish, hypocritical and dishonest.</p>
            <p>We say that they need to be born again - but why? </p>
            <blockquote>
              <p>I was alive apart from the law, but when the commandment came, sin came to life and I died. Sin took the opportunity through the commandment. 
                It deceived me, and through deceit, it killed me.</p>
              <footer><cite>St. Paul, Romans 7:9-11</cite></footer>
            </blockquote>
            <p>Children naturally want to do good, even if they sometimes do things that are wrong - because they are still learning right from wrong  Children willingly obey when they understand why the commandment is right.</p>
            <p>Parents (or other authorities) need to be careful, to always be fair and not take advantage of their power, otherwise the child learns that it is better to disobey.</p>
            <p>When we learn to disobey authority by lying or defying, we start getting tempted to break other rules. We might even be tempted to disobey our own conscience!</p>
            <p>If we choose to not obey our conscience, then we are choosing to deceive ourself in order to believe that the conscience is wrong, and that means that we are rejecting the spirit of truth. That can make us uncomfortable or angry when God's spirit is present.</p>
            <blockquote>
              <p>Unless you turn and become as little children, you shall never enter the kingdom of heaven.</p>
              <footer><cite>Jesus Christ, Matthew 18:3</cite></footer>
            </blockquote>
          </div>
        </div>
      </div>




      <div class="page double" title="What Is Truth?" id="what-is-truth">
        <h2 class="page-title">Pilate said to him "What is truth?"<cite>John 18:38</cite></h2>

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/what-is-truth.jpg')"></div>    

        <div class="transcripts">
          <div class="transcript left">
            <p>Truth isn't debatable. It is simply to be made known and then accepted or rejected.</p>
            <blockquote>
              <p>Truth: the quality or state of being true.</p>
              <footer><cite>https://www.google.com/search?q=define+truth on 20180410</cite></footer>
            </blockquote>
            <p>Some people hate the truth, because it forces them to admit that they are wrong.</p>
            <p>They are afraid of what other people will think of them, so they lie. They will even blame innocent people to escape the truth!</p>
            <blockquote>
              <p>When they persecute you, it is because they don't know the one who sent me. Whoever hates me also hates the father who sent me.</p>
              <footer><cite>Jesus Christ, John 15:21-23</cite></footer>
            </blockquote>
            <blockquote>
              <p>There is no fear in love, but perfect love casts fear out, because fear is of punishment. Furthermore, the one who fears has not
                been made perfect in love!</p>
              <footer><cite>St. John, 1 John 4:18-19</cite></footer>
            </blockquote>

          </div>
          <div class="transcript right">

            <blockquote>
              <p>There is nothing that is hidden that will not be revealed, and no secret that shall not be made known and come into open view.</p>
              <footer><cite>Jesus Christ, Luke 8:17</cite></footer>
            </blockquote>

            <blockquote>
              <p>A servant is not greater than his master. If the world hates you, remember that it first hated me.</p>

              <p>If I had not come and spoken to them, they would not be guilty. But now they have no excuse for their sin.</p>
              <footer><cite>Jesus Christ, John 15:18-24</cite></footer>
            </blockquote>
            <blockquote>
              <p>What I tell you in the dark speak in the light, and what you hear in your ear, shout from the roof tops.</p>
              <footer><cite>Jesus Christ, Matthew 10:27</cite></footer>
            </blockquote>
          </div>
        </div>
      </div>





      <div class="page double" title="No Greater Love!" id="no-greater-love">
        <h2 class="page-title">No Greater Love!</h2>

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/love.jpg')"></div>    

        <div class="transcripts">
          <div class="transcript left">

            <p>A person who does not really know love will attempt to describe it as people and things who make them feel especially good. That
              actually describes a self-centred emotional attachment.</p>

            <p>Christianity defines love perfectly, because the religion itself, is the very definition of love!</p>

            <blockquote>
              <p>Love is patient, love is kind. It does not envy, it does not boast, it is not proud. It does not dishonour others, it is not
                self-seeking, it is not easily angered, it keeps no record of wrongs. Love does not delight in evil, but rejoices with the truth. 
                It always protects, always trusts, always hopes, always perseveres.</p>
              <footer><cite>St Paul, 1 Corinthians 13:4-7</cite></footer>
            </blockquote>




          </div>
          <div class="transcript right">

            <p>Real love is when we do to others as we would have done to us. Jesus said "No one has greater love than this: that one should lay down
              his life for his friends".</p>

            <blockquote>
              <p>This is how everyone will know that you are my disciples, if you have love for one another.</p>
              <footer><cite>Jesus Christ, John 13:35</cite></footer>
            </blockquote>

            <p>Love will always do what is good and right by others; even though there may be no promise of reward; even if we despise that one. Indeed,
              even if we must suffer for it!</p>

            <blockquote>
              <p>If I speak in the tongues of men or of angels, but do not have love, I am only a resounding gong or a clanging cymbal. If I have
                the gift of prophecy and can fathom all mysteries and all knowledge, and if I have a faith that can move mountains, but do not have
                love, I am nothing. If I give all I possess to the poor and give over my body to hardship that I may boast, but do not have love, I
                gain nothing.</p>
              <footer><cite>St Paul, 1 Corinthians 13:1-3</cite></footer>
            </blockquote>

            <blockquote>
              <p>Let us love one another, for love comes from God. Everyone who loves has been born of God and knows God. Whoever does not love
                does not know God, because God is love.</p>
              <footer><cite>St John, 1 John 4:7-8</cite></footer>
            </blockquote>

            <blockquote>
              <p>He who has been forgiven much, will love much.</p>
              <footer><cite>Jesus Christ, Luke 7:47</cite></footer>
            </blockquote>
          </div>
        </div>
      </div>








      <div class="page double" title="Why Sacrifice Messiah?" id="why-sacrifice-messiah">
        <h2 class="page-title">Why Sacrifice Messiah?</h2>

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/why-sacrifice-messiah.jpg')"></div>    

        <div class="transcripts">
          <div class="transcript left">
            <blockquote>
              <p>My Father, if it is not possible for this cup to be taken away unless I drink it, may your will be done.</p>
              <footer><cite>Jesus Christ, Matthew 26:42</cite></footer>
            </blockquote>
          </div>
          <div class="transcript right">
            <p>Two Thousand Years Ago, Jesus lived according to prophecy in Israel, fulfilling the plan that God had foretold.</p>
            <p>He was born to a virgin mother, Mary, and was raised with faith to have a special relationship with God: His Heavenly Father.</p>
            <p>He was teaching how God can heal the world, and that the world had many wrong ideas about God. But, the religious leaders thought Jesus should be learning from them rather than teaching them. Enraged, they crucified Him to prove their point.</p>
            <p>It really proves that the human is so sinful, that even the most religious people thought that would please God!</p>
            <p>But God knew that He can still teach us by spirit and that some people would truly repent of their sin to follow Him .. so in  that way, He can heal the world through us!</p>


            <blockquote>
              <p>So, it is because God loved the world,
                that He gave up His only-begotten son,
                so that everyone believing in Him
                should not be wasting away in decay, 
                but having life fully without end!</p>
              <footer><cite>John 3:16</cite></footer>
            </blockquote>
          </div>
        </div>
      </div>







      <div class="page double" title="No Ticket To Heaven" id="no-ticket-to-heaven">
        <h2 class="page-title">No Ticket To Heaven</h2>

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/no-ticket-to-heaven.jpg')"></div>    

        <div class="transcripts">
          <div class="transcript left">
            <p>Too many people present the gospel as a basic formula: "believe it, say it, simple!". Real salvation changes our life, and requires
              total devotion.</p>
            <blockquote>
              <p>Make every effort to enter through the narrow door. Many, I tell you, will try to enter and will not be able to</p>
              <footer><cite>Jesus Christ, Luke 13:24</cite></footer>
            </blockquote>
          </div>
          <div class="transcript right">

            <blockquote>
              <p>Only those who do my father's will shall enter heaven. Many will say to me "Lord! Lord! see all the great things we did in 
                your name!" To them I will plainly say "I never knew you! Get away from me, you who are lawless".</p>
              <footer><cite>Jesus Christ, Matthew 7:19-21</cite></footer>
            </blockquote>
            <blockquote>
              <p>Suppose the servant thinks "My master delays", and becoming one of the rebels, starts beating his fellow servants. I tell you,
                the master shall come at an unexpected time to severley punish him. He will be placed with the unfaithful, where there is weeping
                and gnashing of teeth. Therefore, keep watch. You don't know on what day your Lord will come.</p>
              <footer><cite>Jesus Christ, Matthew 24:45-51</cite></footer>
            </blockquote>
            <blockquote>
              <p>I am the true vine and my father is the cultivator. He cuts off any branch in me that does not bear good fruit. But those who
                do bear fruit are pruned to produce more. Remain in me, and I will remain in you that you may bear much fruit. Apart from me, 
                you can do nothing.</p>
              <footer><cite>Jesus Christ, John 15:1-6</cite></footer>
            </blockquote>
            <blockquote>
              <p>Enter through the narrow gate, because many take the broad road leading to destruction. The gate is small and the road narrow,
                that leads to life. Only a few will ever find it.</p>
              <footer><cite>Jesus Christ, Matthew 7:13-14</cite></footer>
            </blockquote>

          </div>
        </div>
      </div>





      <div class="page double" title="Faith vs Works" id="faith-vs-works">
        <h2 class="page-title">Faith vs Works</h2>

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/faith-vs-works.jpg')"></div>    

        <div class="transcripts">
          <div class="transcript left">
            <p>Some people think that the bible is a criteria for heaven, a set of commandments in order to escape a certain doom <span class="reference">John 5:37-40</span>. That is sometimes called "legalism" or "works-based faith".</p>
            <p></p>
            <p></p>
            <p></p>

            <blockquote>
              <p>The law is to silence every mouth and make the world accountable to God for punishment.</p>
              <p>Therefore, no one will be declared righteous before God by works of law, for by law comes awareness of sin. God Himself
                gives righteousness to those who live by faith, who always put their trust in Jesus Christ.</p>
              <p>There is no sense of achievement for the righteousness we receive, as every one has sinned and fallen short of the glory of God.
                It is God's gift through the redemption in Christ Jesus, so we may boast only of His goodness and not our own.</p>

              <footer><cite>St. Paul, Romans 3:19-27</cite></footer>
            </blockquote>

            <blockquote>
              <p>God is spirit, and those who worship Him must worship in spirit and in truth</p>
              <footer><cite>Jesus Christ, John 4:24</cite></footer>
            </blockquote>

          </div>
          <div class="transcript right">
            <p>St. Paul worked hard to explain legalism vs. obedience, and still many people are confused.</p>
            <p>A legalistic religion is based upon a fear of punishment for failure, whereas salvation sets us free by knowing that God is pleased with us</p>
            <p>The Gospel of Jesus Christ is meant to restore our relationship with God, the maker <span class="reference">John 1:12</span>, <span class="reference">Galatians 4:4-7</span>, <span class="reference">Romans 8:14-17</span>, <span class="reference">Matthew 25:40</span>. He becomes a real and active part of our life, a loving shepherd leading us in the way (Psalm 23).</p>
            <p>He will always tell us when we need to repent, and we can recognise when people's words are inferior to His.</p>
            <p>This is how we can be certain of our salvation, without a doubt.</p>
            <p>Some people follow teachings to believe that they are Christian, but they don't personally know God. They repent for a short time but they don't really grow into the image of God.</p>
            <p>The "once saved, always saved" doctrine is not properly understood by all Christians, so they might sometimes make it sound like a license to sin <span class="reference">Hebrews 10:26-29</span></p>



          </div>
        </div>
      </div>














      <div class="page double" title="Stay Close With God" id="stay-close-with-god">
        <h2 class="page-title">Stay Close With God</h2>

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/staying-close-with-god.jpg')"></div>    

        <div class="transcripts">
          <div class="transcript left">

            <p>We can sometimes feel like worship is more of a duty than a precious moment with God.</p>
            <p>God doesn't need us to be in church, He needs us to take His spirit into the world!</p>
            <p>When we bring the spirit of God to others to relieve their suffering, He treasures us as His child. That
              makes us sing from the heart!</p>

            <blockquote>
              <p>"To what purpose is the multitude of your sacrifices to me?" says The Lord. "I have had enough of burnt
                offerings of rams and the fat of fed cattle. I do not delight in the blood of bulls, or of lambs or goats.</p>
              <p>"When you come to appear before me, who has required this from you, to trample my courts?</p>
              <p>Wash yourselves, make yourselves clean; Remove your evil deeds from my sight;</p>
              <p>Stop doing bad.</p>
              <p>Learn to do good, seek justice, relieve the oppressed, defend the orphan, plead for the widow"</p>
              <footer><cite>Isaiah 1:11-17</cite></footer>
            </blockquote>



          </div>
          <div class="transcript right">

            <blockquote>
              <p>My sacrifice to you is a broken spirit. God, you will not despise a heart that is broken and contrite.</p>
              <footer><cite>King David, Psalms 15:19</cite></footer>
            </blockquote>

          </div>
        </div>
      </div>












      <div class="page double" title="Lasting Treasure" id="lasting-treasure">
        <h2 class="page-title">Worthy Pursuits</h2>

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/lasting-treasure.jpg')"></div>    

        <div class="transcripts">
          <div class="transcript left">
            <blockquote>
              <p>No one can serve two masters; for either he will hate the one and love the other, or else he will be loyal to one and despise the
                other. You cannot serve both God and mammon.</p>
              <footer><cite>Jesus Christ, Matthew 6:24</cite></footer>
            </blockquote>


            <blockquote>
              <p>Do not store up for yourselves treasures on earth, where moth rust and thieves break in and steal. But store up for yourselves 
                treasures in heaven, where neither moth nor rust destroys and where thieves do not break in or steal. For where your treasure is, 
                there will be your heart also.</p>
              <footer><cite>Jesus Christ, Matthew 6:19-21</cite></footer>
            </blockquote>

            <blockquote>
              <p>Many live as enemies of the cross of Christ. Their destiny is destruction, their god is their stomach, and their glory is in their
                shame. Their mind is set on earthly things. But our citizenship is in heaven. </p>
              <footer><cite>St. Paul, Philippians 3:18-20</cite></footer>
            </blockquote>

            <blockquote>
              <p>Mammon: Riches or material wealth, esp. as an influence for evil or immorality.</p>
              <footer><cite>https://www.thefreedictionary.com/mammon on 20180410</cite></footer>
            </blockquote>


          </div>
          <div class="transcript right">

            <blockquote>
              <p>So they brought him a coin. And he said to them, "Whose image and inscription is this?" They said
                to him, "Caesar's" and he said to them, "Render therefore to Caesar the things that are Caesar's, and to
                God the things that are God's" <span class="reference">Deuteronomy 10:14, Psalms 50:12</span></p>
              <footer><cite>Matthew 22:19-21</cite></footer>
            </blockquote>
            <blockquote>
              <p>God blesses the ground when it drinks in the rain that frequently falls on it and then produces useful
                growth. But if it produces thorns and thistles, it is rejected, it is near to being cursed, and it's end
                is to be burned.</p>
              <footer><cite>St. Paul, Hebrews 6:7-8</cite></footer>
            </blockquote>
            <blockquote>
              <p>Some who hear the word are like seed falling among thorns. The worries of this life, the deceitfulness of
                wealth, and various desires for other things, choke the word that was sown. So it doesn't grow in them to 
                produce good fruit.</p>
              <footer><cite>Jesus Christ, Mark 4:18-19</cite></footer>
            </blockquote>
            <blockquote>
              <p>Wherever your treasure is, there will be your heart.</p>
              <footer><cite>Jesus Christ, Matthew 6:19-21</cite></footer>
            </blockquote>


          </div>
        </div>
      </div>






      <div class="page double" title="Discipleship And Martyrdom" id="discipleship-and-martyrdom">
        <h2 class="page-title">Martyrdom</h2>


        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/discipleship-and-martyrdom.jpg')"></div>    

        <div class="transcripts">
          <div class="transcript left">
            <blockquote>
              <p>I have great sorrow and unceasing anguish in my heart. For I could wish that I myself were cursed
                and cut off from Christ for the sake of my people, those of my own race, the people of Israel.</p>
              <footer><cite>St. Paul, Romans 9:3</cite></footer>
            </blockquote>

            <p>Saint Paul had such love for his fellow Israelites, that he would rather be lost than saved, if it would
              save them.</p>
            <p>At the heart of martyrdom is a willingness to suffer for another's liberation.</p>

            <blockquote>
              <p>Whoever loves his father or mother more than he loves me is not worthy of me; anyone who loves his 
                son or daughter more than he loves me is not worthy of me. And anyone who does not take up his cross
                and follow me is not worthy of me. Whoever finds his own life will lose it, but the person who loses 
                his life for my sake will find it.</p>
              <footer><cite>Jesus Christ, Matthew 10:37-39</cite></footer>
            </blockquote>

          </div>
          <div class="transcript right">
            <h2 class="page-title">Discipleship</h2>
            <blockquote>
              <p>You know that those who think to rule the nations are masters over them, and their great ones exercise authority
                over them. But it is not so among you. Whoever wishes to become great among you shall be your servant, and whoever
                wishes to be first among you shall be servant of all. Even the Son of Man did not come to be served, but to serve,
                and to give His life a ransom for many.</p>
              <footer><cite>Jesus Christ, Mark 10:42-45</cite></footer>
            </blockquote>

            <blockquote>
              <p>Love your enemies; Whoever hates you, be kind to them. They curse you, bless them. Insulted? Pray for them. 
                If you are struck on the cheek, offer the other as well. If someone takes your coat, let him have your shirt. Give to
                whomever asks of you. If what is yours is taken, don't insist on getting it back. When you lend without expecting
                to receive it back, and when you give to those who don't help you, then your reward will be great! You will be called
                children of The Most High God. Afterall, He is kind to those who are unthankful. You must be just as merciful.</p>
              <footer><cite>Jesus Christ, Luke 6:27-36</cite></footer>
            </blockquote>

            <blockquote>
              <p>Whoever hears these words of mine and does them is like a wise man who built his house on bedrock. His house 
                survived the storm. The foolish man hears my words and does not act on them. He is like a man who built on sand.
                When the storm came, his house collapsed with a mighty crash!</p>
              <footer><cite>Jesus Christ, Matthew 7:24-27</cite></footer>
            </blockquote>

          </div>
        </div>
      </div>







      <div class="page double" title="The Word Of God" id="word-of-god">
        <h2 class="page-title">The Word of God</h2>

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/the-word-of-god.jpg')"></div>    

        <div class="transcripts">
          <div class="transcript left">

            <blockquote>
              <p>He who has ears to hear, let him hear.</p>
              <footer><cite>Jesus Christ, Mark 4</cite></footer>
            </blockquote>

            <blockquote>
              <p>Word: A command, password, or signal.</p>
              <footer><cite>https://www.google.com/search?q=define+word on 20180410</cite></footer>
            </blockquote>

            <p>God's voice has been with us from the beginning <span class="reference">John 1:1-4</span>, instructing those who love
              Him <span class="reference">Revelation 3:19-20</span></p>
            <p>Although Jesus (God's Word in human form <span class="reference">John 1:14</span>) now waits in heaven
              <span class="reference">Hebrews 10:11-13</span>, we Christians are joined with Him in a very special way: He has 
              exchanged places with us! In death He paid the wages of our sin <span class="reference">Mark 10:45</span>, so in life
              we become the present "body of Christ" <span class="reference">Ephesians 4:11-16</span></p>
            <p>We are adopted as heirs to the kingdom of God in Christ Jesus <span class="reference">Romans 8:14-17</span>, receiving
              authority <span class="reference">John 1:12</span> and power as co-heirs with Him, and God may speak through us 
              <span class="reference">Isaiah 59:20-21</span></p>
            <p>We are a holy, royal priesthood <span class="reference">1 Peter 2:9</span>, representing The Most High 
              <span class="reference">2 Corinthians 5:20</span>. Our words must speak truth in perfect faithfulness, without sin
              and deceit, for His sake <span class="reference">Jeremiah 23:21-22</span></p>
            <p>This authority only belongs to a person having good conscience that God supports them <span class="reference">1 Peter 3:10-17,
                Hebrews 10:38</span>. This is why we must live worthy of the calling <span class="reference">1 Corinthians 6:20</span>, turning
              away from sin and making every effort in obedience, to give Him glory <span class="reference">John 15:8</span></p>


          </div>
          <div class="transcript right">
            <blockquote>
              <p>By speaking the truth in love, we will grow to become in every respect the mature body of him who is the head, that is, Christ. From him the whole body grows and builds itself up in love, as each part does it's work.</p>
              <footer><cite>Ephesians 4:15-16</cite></footer>
            </blockquote>

            <blockquote>
              <p> The disciples asked, “Why do You speak to them in parables?” And He replied, “To you has been given to know the secrets of the kingdom of heaven, but to them it has not been given. For whoever has, to him more will be given and he will have plenty. But whoever does not have, even what he has will be taken away from him. For this reason I speak to them in parables, because seeing they do not see, and hearing they do not hear nor do they understand.</p>
              <footer><cite>Matthew 13:10-13</cite></footer>
            </blockquote>

            <blockquote>
              <p>Beware of men, for you will be brought before governors and kings because of me. But when they hand you over, do not worry about how or what you should say, for it is not you speaking, but the spirit of your Father speaking through you.</p>
              <footer><cite>Matthew 10:17-20</cite></footer>
            </blockquote>

            <blockquote>
              <p>“This is my covenant with them,” says Adonai: “My spirit who is on you, and my words that I have put in your mouth, shall not depart from your mouth, or from the mouth of your offspring, or from the mouth of your children’s offspring,” says Adonai, “from now on and forever”</p>
              <footer><cite>Isaiah 59-20-21</cite></footer>
            </blockquote>

            <blockquote>
              <p>Jesus rebuked the wind and waves: “be quiet!” and it fell calm. The disciples having such little faith were amazed: “who is this? - Even the wind and the waves obey him!"</p>
              <footer><cite>Matthew 8-26-27</cite></footer>
            </blockquote>


          </div>
        </div>
      </div>










      <div class="page double" title="Holy Communion" id="holy-communion">
        <h2 class="page-title">Holy Communion</h2>

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/holy-communion.jpg')"></div>    

        <div class="transcripts">
          <div class="transcript left">

            <p>Jesus gave up His life on earth as a ransom for our sin, so that His spirit can live within us! We are individuals, but collectively we are the body of Christ <span class="reference">Ephesians 4:9-16</span>, <span class="reference">Colossians 1:24</span>, united in spirit.</p>
            <p>We break bread to remember that His body, once whole, was broken for us <span class="reference">Ephesians 3:6</span></p>




            <blockquote>
              <p>While they were eating, Jesus took bread, and when he had given thanks, he broke it and gave it to his disciples,
                saying, "Take and eat; this is my body".</p>
              <footer><cite>Jesus Christ, Matthew 26:26</cite></footer>
            </blockquote>

            <blockquote>
              <p>Whenever you eat this bread and drink this cup, you proclaim The Lord's death until he comes. So then, whoever
                eats the bread or drinks the cup in an unworthy manner will be guilty of sinning against the body and blood of
                The Lord. Everyone ought to examine themselves before they eat of the bread and drink from the cup. For those who
                eat and drink without discerning the body of Christ eat and drink judgement upon themselves.</p>
              <footer><cite>St. Paul, 1 Corinthians 11:26-31</cite></footer>
            </blockquote>

          </div>
          <div class="transcript right">

            <p>The wine is His blood <span class="reference">Leviticus 17:11</span>. His divine life goes in us and throughout us, so that we become a reflection of Him <span class="reference">John 6:56</span></p>

            <blockquote>
              <p>Then he took a cup, and when he had given thanks, he gave it to them,
                saying, "Drink from it, all of you. This is my blood of the covenant, which is poured out for many for the 
                remission of sins <span class="reference">Hebrews 10:4</span>, <span class="reference">Hebrews 10:26-30</span>.</p>
              <footer><cite>Jesus Christ, Matthew 26:27</cite></footer>
            </blockquote>




            <blockquote>
              <p>I will not drink from this fruit of the vine from now on, until that day when I drink it new with you,
                in My Father's Kingdom.</p>
              <p>Whenever you do this, remember me.</p>
              <footer><cite>Jesus Christ, Luke 22:18-19</cite></footer>
            </blockquote>


          </div>
        </div>
      </div>










      <div class="page double" title="Baptism" id="baptism">
        <h2 class="page-title">Baptism</h2>

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/baptism.jpg')"></div>    

        <div class="transcripts">
          <div class="transcript left">

            <blockquote>
              <p>The way baptism saves us, the water depicting how the ark saved Noah, is not by the putting away of the filth of the flesh,
                but a pledge of a good conscience toward God's expectation, through the resurrection of Jesus Christ, who is at the right 
                hand of God in heaven - with angels, authorities and powers having been subjected to him.</p>
              <footer><cite>St. Peter, 1 Peter 3:21-22</cite></footer>


          </div>
          <div class="transcript right">

            <p>Baptism is a public ceremony for our covenant with God, witnessed by heaven and earth. The details of an 
              individual's covenant are personal and perfectly understood by both parties.</p>

            <p>When we commit our life to live God's way, He renews our conscience <span class="reference">1 Peter 3:21-22</span>.
              We are no longer the same old sinner that we once were, but we are made new, learning to live blamelessly by
              following Him <span class="reference">Ephesians 4:21-24</span></p>

            <p>We don't have to pretend to be someone that we aren't, because we know that God is pleased for His spirit to live in us.</p>

            <p>Being raised from the water symbolises the resurrection that we are promised in Christ <span class="reference">John 5:24</span>, 
              <span class="reference">1 John 3:14</span>, <span class="reference">John 6:39</span>, <span class="reference">Colossians 2:12</span></p>

            <p>In this way, St. Peter is describing that the water cleanses us by washing away the guilt of our past.</p>

            <blockquote>
              <p>Therefore, if anyone is in Christ, he is a new creation - the former has passed away, and behold, the new has come!</p>
              <footer><cite>St. Paul, 2 Corinthians 5:17</cite></footer>
            </blockquote>

          </div>
        </div>
      </div>







      <div class="page double" title="The Holy Spirit" id="holy-spirit" data-first-side="right">

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/holy-spirit.jpg')"></div>    

        <div class="transcripts">
          <div class="transcript left">

            <p>Sometimes words have a deeper meaning for us, even if the one who is speaking doesn't know it.</p>

            <p>This deeper meaning speaks to us, because it is a special insight that only matches our
              own thoughts, whatever our private concerns may be<span class="reference">Proverbs 1:20-21</span></p>

            <p>When we begin to perceive these voices, we may choose to ignore them <span class="reference">John 14:17</span>,
              or learn from them <span class="reference">Hebrews 12:25</span></p>

            <blockquote>
              <p>I shall ask the Father, and He shall give you another Helper, to stay with you forever - the Spirit of
                The Truth, whom the world is unable to receive, because it does not see Him or know Him. But you know Him, 
                for He stays with you and shall be in you.</p>
              <footer><cite>Jesus Christ, John 14:16-17</cite></footer>
            </blockquote>

            <p>We must be very careful about believing what the spirits <span class="reference">John 10:4-7, John 14:6</span>
              want to teach us. St. John warns that not every spirit has been sent by God:</p>


            <blockquote>
              <p>Do not believe every spirit, but prove the spirits, whether they are of God, because many false prophets have
                gone out into the world. Every spirit that confesses that Jesus Christ has come in the flesh, is of God. The
                spirit that does not confess that Jesus Christ has come in the flesh, is not of God. That is the spirit of the
                antichrist.</p>
              <footer><cite>St. John, 1 John 4:1-3</cite></footer>
            </blockquote>

          </div>
          <div class="transcript right">
            <h2 class="page-title">The Holy Spirit</h2>

            <blockquote>
              <p>God is love. He who stays in love stays in God, and God in him.</p>
              <footer><cite>St. John, 1 John 4:16</cite></footer>
            </blockquote>

          </div>
        </div>
      </div>








      <div class="page double" title="Spiritual Possession" id="spiritual-possession">

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/spiritual-possession.jpg')"></div>    

        <div class="transcripts">
          <div class="transcript left">
            <h2 class="page-title">Spiritual Possession</h2>

            <blockquote>
              <p>Possession: The state of having, owning, or controlling something.</p>
              <footer><cite>https://www.google.com/search?q=define+possession on 20180410</cite></footer>
            </blockquote>

            <blockquote>
              <p>Do you not know that to whom you present yourselves servants for obedience, you are servants of the one
                whom you obey, whether of sin to death, or of obedience to righteousness?</p>
              <footer><cite>St. Paul, Romans 6:16</cite></footer>
            </blockquote>

            <blockquote>
              <p>You are from God, children, and have overcome them, because greater is he who is in you than he who is
                in the world.</p>
              <footer><cite>St. John, 1 John 4:4</cite></footer>
            </blockquote>

          </div>
          <div class="transcript right">
            <blockquote>
              <p>The spirit of The Lord is upon me, because He has anointed me to proclaim liberty to the captives and recovery
                of sight to the blind.</p>
              <footer><cite>Jesus Christ, Luke 4:16-21</cite></footer>
            </blockquote>

            <blockquote>
              <p>Your bodies are temples of The Holy Spirit, who is in you, whom you have received from God. You are not your own;</p>
              <footer><cite>St. Paul, 1 Corinthians 6:19</cite></footer>
            </blockquote>

            <blockquote>
              <p>Truly, truly, I say to you, everyone doing sin is a servant of sin. A servant does not stay in the house forever
                - a son stays forever. If, then, the son makes you free, you shall be free indeed.</p>
              <footer><cite>Jesus Christ, John 8:34-36</cite></footer>
            </blockquote>

            <blockquote>
              <p>You are already clean because of the word I have spoken to you. Stay in me, and I stay in you. As the branch
                is unable to bear fruit unless it stays in the vine, so neither you, unless you stay in me. I am the vine and
                you are the branches. If you remain in me and I in you, you will bear much fruit; apart from me you can do nothing.
                If you do not remain in me, you are like a branch that is thrown away and dries up; and they gather them and throw
                them into the fire and they are burned.</p>
              <footer><cite>Jesus Christ, John 15:3-6</cite></footer>
            </blockquote>

            <blockquote>
              <p>Dear friends, do not believe every spirit, but test the spirits to see whether they are from God, because many
                false prophets have gone out into the world.</p>
              <footer><cite>St. John, 1 John 4:1</cite></footer>
            </blockquote>


          </div>
        </div>
      </div>









      <div class="page double" title="What Is Sin?" id="what-is-sin">
        <h2 class="page-title">What is Sin?</h2>

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/what-is-sin.jpg')"></div>

        <div class="transcripts">
          <div class="transcript left">

            <blockquote>
              <p>Whoever knows the right thing to do and does not do it, to him it is sin.</p>
              <footer><cite>St. James, James 4:17</cite></footer>
            </blockquote>

            <blockquote>
              <p>I will put my law in their minds and write it on their hearts. I will be their God, and they will be my people</p>
              <footer><cite>Jeremiah 31:33</cite></footer>
            </blockquote>

          </div>
          <div class="transcript right">

            <dl>
              <dt>Pride</dt>
              <dd><strong>"I am better/right"</strong></dd>
              <dd>Often the root of persisting sin. By doing God's will instead of our own, we can gain His approval.
                After all, what reason could God have, to be displeased with us?</dd>
            </dl>
            <dl>
              <dt>Lust</dt>
              <dd><strong>"I want that"</strong></dd>
              <dd>When we are not content with what we have, we focus our attention on a hope of gratification. This never
                gives us satisfaction, and it generates distress.</dd>
            </dl>
            <dl>
              <dt>Gluttony</dt>
              <dd><strong>"I can't help myself"</strong></dd>
              <dd>Compromised self-control, for destructive behaviour. Gambling, addictions, etc.</dd>
            </dl>
            <dl>
              <dt>Sloth</dt>
              <dd><strong>"I can't be bothered"</strong></dd>
              <dd>When we don't do what we really should do, this can impact others who rely on us.</dd>
            </dl>
            <dl>
              <dt>Wrath</dt>
              <dd><strong>"I'll make you pay"</strong></dd>
              <dd>Anger resulting in fury makes us act against others in a way that is insulting, harmful or destructive.</dd>
            </dl>
            <dl>
              <dt>Greed</dt>
              <dd><strong>"I still need more"</strong></dd>
              <dd>Even if we have enough, we still want more. Inevitably, this causes some suffering to ones who genuinely need it
                more than we do.</dd>
            </dl>
            <dl>
              <dt>Envy</dt>
              <dd><strong>"I deserve it more"</strong></dd>
              <dd>This causes us to hate those who have what we want, perhaps taking it from them or being unkind.</dd>
            </dl>


          </div>
        </div>
      </div>








      <div class="page double" title="What Went Wrong?" id="what-went-wrong">
        <h2 class="page-title">What Went Wrong?</h2>


        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/what-went-wrong.jpg')"></div>

        <div class="transcripts">
          <div class="transcript left">

            <blockquote>
              <p>The reign of the heavens has become like a man who sowed good seed in his field, but while men slept, 
                his enemy sowed darnel amongst it. When the workers discovered this, they asked whether they should remove
                the weeds. 'No', he instructed, 'so that you will not uproot some of the wheat too. Let both grow together
                until the harvest. The reapers shall bundle the weeds to burn them and gather the wheat to my granary.</p>
              <footer><cite>Jesus Christ, Matthew 13:24-30</cite></footer>
            </blockquote>

            <blockquote>
              <p>Certain men have slipped in, wicked ones perverting the favour of God for indecency. These dreamers defile
                the flesh, reject authority, and speak evil of glorious ones. These are grumblers, complainers, who walk according
                to their own lusts, speaking boastfully, giving admiration to persons for the sake of gain. These are the ones
                causing divisions. Sensual, and devoid of the spirit.</p>
              <footer><cite>St. Jude, Jude 1:1-25</cite></footer>
            </blockquote>

          </div>
          <div class="transcript right">
            <blockquote>
              <p>I know that after I leave, savage wolves will come in among you and will not spare the flock</p>
              <footer><cite>St. Paul, Acts 20:29</cite></footer>
            </blockquote>

            <blockquote>
              <p>The false teachers coming among you will secretly introduce destructive heresies. Many will follow their depraved
                conduct and will bring the way of truth into disrepute. In their greed, these teachers will exploit you with 
                fabricated stories.</p>
              <footer><cite>St. Peter, 2 Peter 2:1-3</cite></footer>
            </blockquote>

            <blockquote>
              <p>His subjects hated him and sent a delegation after him, to say, 'We don't want this man to reign over us!'</p>
              <footer><cite>Jesus Christ, Luke 19:13-15</cite></footer>
            </blockquote>

          </div>
        </div>
      </div>






      <div class="page double" title="Man Against God" id="man-against-god">
        <h2 class="page-title">Man against God</h2>


        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/man-against-god.jpg')"></div>

        <div class="transcripts">
          <div class="transcript left">

            <p>Sometimes people choose to use God's name as authority for their own agenda, because He is a powerful 
              figure and they think they are righteous by association <span class="reference">Exodus 20:7, Matthew 7:21</span>
              Those who represent God for their own interests, deny The Kingdom's Power.</p>

            <blockquote>
              <p>God knows that in the day you eat of it, your eyes shall be opened, and you shall be like God, knowing
                good and evil." The woman saw that the tree was good for food, pleasant to the eyes and desirable to make
                one wise. She took from it's produce and ate, and gave to her man who was with her, and he ate.</p>
              <footer><cite>Genesis 3:5-6</cite></footer>
            </blockquote>

            <blockquote>
              <p>The people conspired, saying, "let us build a tower reaching to the heavens, to make a name for ourselves".
                Then God said "look at what the human has begun to do, and if they complete this then nothing will be unattainable
                for them". So He scattered them, confusing their speech so one could not understand another.</p>
              <footer><cite>Genesis 11:4-8</cite></footer>
            </blockquote>

            <blockquote>
              <p>When the tenants saw the son coming, they said amongst themselves "here comes the heir to the estate!
                Let's kill him and seize the estate for ourselves!".</p>
              <footer><cite>Jesus Christ, Matthew 21:38</cite></footer>
            </blockquote>

            <blockquote>
              <p>His citizens hated him, and sent a delegation after him, to say "we don't want this man to reign over us!"</p>
              <footer><cite>Jesus Christ, Luke 19:13-15</cite></footer>
            </blockquote>
          </div>
        </div>

      </div>













      <div class="page double" title="Final Judgment" id="final-judgment" data-first-side="right">
        <h2 class="page-title">The Final Judgement</h2>

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/final-judgment.jpg')"></div>

        <div class="transcripts">
          <div class="transcript left">

            <p>The final judgement is about how we have treated others, not what we have believed.</p>

            <blockquote>
              <p>The king will say to those sorted to his right hand, 'Come, you who are blessed by my father; inherit 
                the kingdom prepared for you since the foundation of the world. For I was hungry, I was thirsty, I was 
                a stranger, I was naked, I was sick, I was in prison. You always helped and cared for me.'</p>
              <p>"The righteous will answer, 'Lord, when did we see you hungry, or thirsty, a stranger, or needing clothes? 
                When did we see you sick or in prison, and do all this for you?'</p>
              <p>"The king will reply, 'Truly I tell you, whatever you did to one of the least of these brothers and sisters
                of mine, you did it to me'</p>
              <p>"Then to those sorted on his left, 'Go, you cursed ones, into the eternal fire prepared for the devil and his
                angels. I was hungry, I was thirsty, a stranger, I needed clothes, I was sick and in prison, and all those times,
                you did nothing to help.'</p>
              <p>"They too will answer, 'Lord, when did we see you hungry or thirsty or a stranger or naked or sick or in prison,
                and did not care for you or help you?'</p>
              <p>"He will reply, 'Truly I tell you, whatever you did not do for one of the least of these, you did not do for me.'</p>
              <p>The wicked will go to everlasting punishment, but the righteous to everlasting life</p>
              <footer><cite>Jesus Christ, Matthew 25:31-46</cite></footer>
            </blockquote>

          </div>
          <div class="transcript right">

            <blockquote>
              <p>When the Son of Man comes in his glory, the holy angels with him, then he will sit on his glorious throne.</p>
              <footer><cite>Jesus Christ, Matthew 25:31-46</cite></footer>
            </blockquote>

          </div>
        </div>
      </div>





      <div class="page double" title="Paradise Earth" id="paradise-earth">
        <h2 class="page-title">Paradise Earth</h2> 

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/paradise-earth.jpg')"></div>

        <div class="transcripts">
          <div class="transcript left">

            <blockquote>
              <p>In that day, the wolf will dwell with the lamb, the leopard will lie down with the baby goat, the calf and
                the young lion and the yearling together, and a little child will lead them. </p>
              <p>The cow and the bear will graze together, their young ones lying down together, and the lion will eat straw
                like an ox.</p>
              <p>A nursing child will play by a nest of snakes, and a weaned child will put his hand into a viper's den
                without harm.</p>
              <p>They will not hurt or destroy in all My holy mountain, for the earth will be full of the knowledge of God,
                as the waters cover the sea.</p>
              <footer><cite>Isaiah 11:6-9</cite></footer>
            </blockquote>


            <blockquote>
              <p>He will wipe away every tear from their eyes and death will not be any longer; nor mourning nor crying
                nor pain, they will not be any longer, for the former things have passed away.</p>
              <footer><cite>Revelation 21:4</cite></footer>
            </blockquote>


          </div>
          <div class="transcript right">


          </div>
        </div>
      </div>








      <div class="page double" title="Are They Lost?" id="are-they-lost" data-first-side="right">
        <h2 class="page-title">Are they lost?</h2> 

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/are-they-lost.jpg')"></div>

        <div class="transcripts">
          <div class="transcript left">

            <p>God sent the prophet Jonah to pronounce judgement upon the city of Nineveh, but when the city heard the judgement,
              they repented. So God decided to forgive them. Jonah was upset with God for making him speak an unfulfilled prophecy.</p>
            <p>Actions alone might not always mean a person is wicked, because fair justice will consider circumstances and culture.
              An offender may have believed they were actually doing right instead of wrong!</p>
            <p>Jesus warns us to not judge others, because we ourselves are guilty. Only God is qualified to judge.</p>


            <blockquote>
              <p>God asked Jonah: is it right for you to be so angry? That plant grew in one night and perished in one
                night. Should I not also feel sorry for Nineveh the great city, in which there are more than 120,000
                men who do not even know right from wrong, as well as their many animals?"</p>
              <footer><cite>Jonah 4:9-11</cite></footer>
            </blockquote>


          </div>
          <div class="transcript right">
            <p>Many people pass away without ever hearing the truth of the gospel. Are those people forever doomed?</p>

            <blockquote>
              <p>I have other sheep that are not from this fold. Those also I must lead. They will listen to my voice, 
                so there'll be one flock, one shepherd.</p>
              <footer><cite>Jesus Christ, John 10:16</cite></footer>
            </blockquote>

            <blockquote>
              <p>I, Adonai, search the heart. I try the mind, to give to every man according to his ways, according
                to the fruitage of his works.</p>
              <footer><cite>Jeremiah 17:10</cite></footer>
            </blockquote>

            <blockquote>
              <p>The servant who knew his master's will but did not prepare or act according to his desire will be harshly whipped. 
                But the one who did not know and what deserved flogging, shall be beaten with few. From everyone given much,
                much will be required; and from the one for whom more is provided, all the more they will ask of him.</p>
              <footer><cite>Jesus Christ, Luke 12:47-48</cite></footer>
            </blockquote>

          </div>
        </div>
      </div>

      <div class="page double" title="Jesus For Jews" id="jesus-for-jews" data-first-side="right">
        <h2 class="page-title">Jesus for Jews</h2> 

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/jesus-for-jews.jpg')"></div>

        <div class="transcripts">
          <div class="transcript left">


            <blockquote>
              <p>They shall look upon me whom they pierced, and they shall be in bitterness over him as a bitterness over
                the first-born.</p>
              <footer><cite>Zechariah 12:10</cite></footer>
            </blockquote>


          </div>
          <div class="transcript right">

            <blockquote>
              <p>Hardening in part has come over Israel, until the completeness of the nations has come in.</p>
              <footer><cite>St. Paul, Romans 11:25</cite></footer>
            </blockquote>

            <blockquote>
              <p>Jerusalem shall be trampled underfoot by the nations until the times of the nations are filled.</p>
              <footer><cite>Jesus Christ, Luke 21:24</cite></footer>
            </blockquote>

            <blockquote>
              <p>This is my covenant with those turning from transgression in Jacob, says Adonai: "My Spirit that is upon
                you, and My Words that I have put in your mouth, shall not be withdrawn from your mouth, nor from the 
                mouth of your descendants, nor their descendants," said Adonai, "from this time and forever".</p>
              <footer><cite>Isaiah 59:21</cite></footer>
            </blockquote>

            <blockquote>
              <p>Adonai is the true God. He is The Living God and The Everlasting King. At His wrath the earth will tremble,
                and the nations will not be able to endure His indignation.</p>
              <footer><cite>Jeremiah 10:10</cite></footer>
            </blockquote>


            <blockquote>
              <p>My reign is not of this world. If my reign were of this world, my servants would fight so that I should
                not be delivered to the Jews. But now my reign is not from here.</p>
              <footer><cite>Jesus Christ, John 18:36</cite></footer>
            </blockquote>

          </div>
        </div>
      </div>







      <div class="page double" title="Growing The Church" id="growing-the-church">
        <h2 class="page-title">Growing The Church</h2> 

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/growing-the-church.jpg')"></div>

        <div class="transcripts">
          <div class="transcript left">

            <blockquote>
              <p>Saint Peter was hurt, because Jesus asked him a third time, "Do you love me?" Peter said, "Lord, you
                know all things; you know that I love you." Jesus said, "Feed my sheep."</p>
              <footer><cite>John 21:17</cite></footer>
            </blockquote>

            <p>The church has a diverse range of people, each having unique character, knowledge and talents. Moreover, 
              what one person can see might be different than what another can see. </p>
            <p>We should kindly share our strengths, to help each other grow to full potential in The Lord.</p>
            <blockquote>
              <p>Christ himself gave the apostles, the prophets, the evangelists, pastors and teachers, to readjust the 
                holy ones for ministerial work, to build up the body of Christ until we all reach unity in the faith
                and in knowing the Son of God, reaching perfection, attaining the full measure of stature that belongs
                to Christ.</p>
              <footer><cite>St. Paul, Ephesians 4:11-16</cite></footer>
            </blockquote>

          </div>
          <div class="transcript right">

            <blockquote>
              <p>The greatest among you shall be your servant. Whoever exalts himself will be humbled, and whoever
                humbles himself shall be exalted.</p>
              <footer><cite>Jesus Christ, Matthew 23:11-12</cite></footer>
            </blockquote>

            <blockquote>
              <p>Not many of you should become teachers, my fellow believers, because you know that we will receive a stricter judgement.</p>
              <footer><cite>St. James, James 3:1</cite></footer>
            </blockquote>

            <blockquote>
              <p>Stay there so that you may command certain people not to teach false doctrines or to pay attention to myths
                and endless genealogies. These promote useless speculations rather than advancing God's work. Our goal is
                to produce love, which comes from a pure heart, a good conscience, and genuine faith. Some have departed
                from these, turning to fruitless discussion. They want to be teachers of the law, but they don't understand
                what they are saying or what they so confidently assert.</p>
              <footer><cite>St. Paul, 1 Timothy 1:3-7</cite></footer>
            </blockquote>


            <blockquote>
              <p>Do not go among the Gentiles, go rather to the lost sheep of Israel. Proclaim this message: 'The kingdom
                of heaven has come near.' Heal the sick, raise the dead, cleanse those who have leprosy, drive out demons. 
                Freely you recieved, freely give.</p>
              <footer><cite>Jesus Christ, Matthew 10:5-8</cite></footer>
            </blockquote>

          </div>
        </div>
      </div>







      <div class="page double" title="Christian Concepts" id="glossary">
        <h2 class="page-title">Christian Concepts</h2> 


        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/glossary.jpg')"></div>

        <div class="transcripts">
          <div class="transcript left">

            <dl>
              <dt>The Holy Bible</dt>
              <dd>A collection of writings originally penned in Hebrew or Greek languages between 1500BC and 100AD,
                by people who had a respected relationship with God. The writings were stored and studied as separate scrolls
                within religious libraries. During the first 300 years after Christ's resurrection, churches established
                formal lists to identify which writings should be considered officially inspired by God, to distinguish
                them from other sacred writings that were written by people whose spirit was not recognised as being
                representative of God.</dd>

              <dt>Heaven</dt>
              <dd>A spiritual realm of reality which is known by faith, in which God resides. Christianity teaches
                that Jesus came to earth to demonstrate God's true nature so that we might recognise Him in the heavenly
                realm and follow Him. Christians are called to follow Jesus, to live in a way that honours Him so that
                we will serve as effective ambassadors of God, becoming a vessel for His Holy Spirit to operate in the world.</dd>

              <dt>Atonement</dt>
              <dd>The putting right of things that are wrong. In context of a person coming to know the truth about sin
                and repentance, this means understanding why the sinfulness is bad, why we became that way, and why God is 
                willing to forgive us for repenting of it.</dd>

            </dl>

          </div>
          <div class="transcript right">

            <dl>
              <dt>Holy</dt>
              <dd>Without sin or fault, beyond reproach.</dd>

              <dt>Messiah / Christ</dt>
              <dd>The only-begotten Son of God, born to a mother who was pure and virgin. He was raised under the shadow
                of The Holy Spirit and heaven's close watch, so that He was presented without blemish to receive all honour,
                glory and praise as The One who is a perfect example of God's intention for mankind. His character is to love
                and heal, to judge without partiality, and to be the fullness of God in human form. Although His human
                body was executed 2,000 years ago, He reigns forevermore in heaven so that we may know Him and represent Him
                on earth while heaven continues to serve Him for an eventual return in glory, afterwhich sin will never
                again rule humankind.</dd>

              <dt>Original Sin</dt>
              <dd>Adam introduced sin to a world that knew no sin, by choosing to disobey God's commandment. Adam could never
                escape the shame and guilt for what he had done. His relationship with God suffered, he doubted God's true
                nature, and subsequently all humans become tainted as they are impacted by the philosophy of a world controlled
                by fear: not being able to fully trust and know God. The corruption of hnumankind's once impeccable knowledge
                of God has spread from this one man's Original Sin, to all.</dd>

            </dl>
          </div>
        </div>
      </div>





      <div class="page double" title="The Great Commission" id="the-great-commission" data-first-side="right">
        <h2>The Great Commission</h2>

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/the-great-commission.jpg')"></div>

        <div class="transcripts">
          <div class="transcript left">

            <blockquote>
              <p>God gave me grace to lay a foundation, like a skilled master builder. Others are building on it. Each 
                must build on it very carefully. No one can lay any foundation other than the one we already have, that is
                Jesus Christ.</p>
              <p>Builders use various sorts of materials: gold, silver, precious stones, wood, hay and straw.</p>
              <p>The quality of each builder's work will become visible when the day comes, and it will be revealed with
                fire. The fire will test what sort of work was done.</p>
              <p>If what has been built survivies, the builder will receive a reward. If the work is burned up, the builder
                will suffer a great loss; himself being saved, but as through fire.</p>
              <footer><cite>St. Paul, 1 Corinthians 3:10-15</cite></footer>
            </blockquote>

            <blockquote>
              <p>He has shown you, O man, what is good; And what does The Lord require of you, but to do justly,
                to love mercy, and to walk humbly with your God?</p>
              <footer><cite>Micah 6:8</cite></footer>
            </blockquote>

          </div>
          <div class="transcript right">

            <p>Follow me, and you will fish for men!</p>

            <blockquote>
              <p>This gospel of the kingdom will be preached in the whole world as a testimony to all nations, and
                then the end will come.</p>
              <footer><cite>Jesus Christ, Matthew 24:14</cite></footer>
            </blockquote>

            <blockquote>
              <p>..For we do not wrestle against flesh and blood, but against principalities, powers, rulers
                of the darkness of this age; against spiritual hosts of wickedness in the heavenly places.</p>
              <footer><cite>St. Paul, Ephesians 6:12</cite></footer>
            </blockquote>

            <p>Nobody lights a lamp and hides it away</p>

          </div>
        </div>
      </div>

      <div class="page" title="Back Cover" id="back-cover">

        <h2 class="page-title">The Gospel</h2>

        <div class="image" style="background-image:url('__ADONAI_REIGNS_LIFE_PLUGINS_ASSETS_URL__/the-gospel/cover-back.jpg')"></div>

        <div class="transcripts">
          <div class="transcript fullwidth">

            <blockquote>
              <p>God did not send his son to condemn the world, rather that through him, it might be saved.</p>
              <footer><cite>Jesus Christ</cite></footer>
            </blockquote>

            <p>Saved from what?</p>

            <blockquote>
              <p>The thief comes to steal, kill and destroy. I have come so they may have life to the full.</p>
              <footer><cite>Jesus Christ</cite></footer>
            </blockquote>

            <hr />

            <p>Two thousand years on, we really must ask: "Why does the world suffer ruthless destruction?"
              Natural rights are plundered by advantaged ones, killing is so frequent and insane.. are we numb?</p>

            <p>Find out the reality of the gospel, and learn why Christianity is yet to achieve it's full intention.</p>

            <p>You'll think more about potential outcomes of prophetic visions, and your views regarding Christianity
              will be challenged for the better!</p>

            <hr />


            <blockquote>
              <p>Let no one deceive you with empty words, for because of these, the wrath of God comes upon the sons
                of disobedience.</p>
              <footer><cite>Saint Paul</cite></footer>
            </blockquote>

          </div>
        </div>
      </div>
    </div>

  </div>
  
</div>		
TPL;
    
    
    
    










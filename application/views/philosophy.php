<div class="bodymodule" id="innerbody">
    <div class="rotator">
        <img src="<?php echo(base_url()); ?>assets/img/banner/normal-philosophy.png">
    </div>
</div>

<div class="news">
    <div class="contentarticle">
        <div id="philin" class="hidden">
        </div>
    </div>
</div>

<!-- Page 1 -->
<div id="phil1" class="hidden">
    <div class="contentleft">
        <img src="<?php echo(base_url()); ?>assets/img/uprisingfist.png">
    </div>
    <div class="contentright">
        <h2>Welcome to Uprising</h2>
        <p>Uprising started raiding when Wrath of the Lich King started, but many of us have been here since day one of the game.
        </p>
        
        <p>This raiding guild isn't our first rodeo, in fact this is the third iteration of the guild itself.
        </p>
        <p>Each iteration we learn from the last.
        </p>
        
        <p>The next pages make up the philosophy of Uprising 3.0
        </p>
        <form>
            <input type="button" class="button" value="Continue" onclick="pageturn()">
        </form>
    </div>
</div>

<!-- Page 2 -->
<div id="phil2" class="hidden">
    <div class="contentleft">
        <img src="<?php echo(base_url()); ?>assets/img/uprisingfist.png">
    </div>
    <div class="contentright">
        <h2>The Core Concepts of Uprising 3</h2>
        <ol class="biglist">
            <li><strong>Community First</strong>: A guild needs to be a community. Guilds
            that are just players who share a raid time don't prosper. Each guild member
            must be part of the community, not just a raiding drone.</li>
            <li><strong>No Bad Apples</strong>: Each player must be focused towards the same
            goal. Players who wish to be disruptive to the harmony of the community are not
            welcome and will be removed.</li>
            <li><strong>Full Transparency</strong>: Each action of every guild member must be
            fully transparent. This means every aspect of the guild, from the application process
            to high level decision making is obvious to every player. Problems between players should be
            brought to air before they escalate.</li>
            <li><strong>No-Excuses Accountability</strong>: Every player is accountable for
            his or her actions. Being disrespectful to fellow players in and out of the guild
            will not be tolerated.</li>
            <li><strong>Trusting Relationships</strong>: Leaving the guild bank open
            should not be a problem, nor should allowing the guild to be player driven. Each
            player should trust the officers and the officers should trust each player.
        </ol>
        <form>
            <input type="button" class="button" value="Continue" onclick="pageturn()">
        </form>
    </div>
</div>

<!-- Page 3 -->
<div id="phil3" class="hidden">
    <div class="contentleft">
        <img src="<?php echo(base_url()); ?>assets/img/uprisingfist.png">
    </div>
    <div class="contentright">
        <h2>A Competitive Raiding Guild</h2>
        <p>Uprising is first and foremost a raiding guild. By taking the best we have to every
        raid we aim to compete on a global stage, while maintaining our 3-day schedule.</p>
        
        <p>We hold
        a constant competition between our members to do their best; and we bring the best
        damage dealers, the strongest healers and the most coordinated tanks to each raid. We
        also make sure we only bring players who can learn and adapt, who seek to improve
        on their mistakes and strengthen their competencies.</p>
        
        <p>We call our recruitment process a competition, as new members compete against the
        old for raid spots. "Sitting out" for a raid is never a problem for our best
        contributors.</p>
        
        <form>
            <input type="button" class="button" value="Continue" onclick="pageturn()">
        </form>
    </div>
</div>

<!-- Page 4 -->
<div id="phil4" class="hidden">
    <div class="contentleft">
        <img src="<?php echo(base_url()); ?>assets/img/uprisingfist.png">
    </div>
    <div class="contentright">
        <h2>A Social Guild</h2>
        <p>A raiding guild full of strangers is not very interesting.</p>
        
        <p>With so many alternatives available for raiding, such as the <i>raid finder</i>
        and websites such as <i>openraid</i>, there needs to be a reason to commit to a
        raiding guild at all. The solution is simple; create a community that enjoys raids
        and the company of the raiders they play with.</p>
        
        <p>Uprising encourages its members to participate in off-night events such as
        guild PvP and alt nights. Our goal is to maintain a full cast of both our raid
        team and non-raiders to enjoy the game with. As such, we recruit both
        competitive raiders and casual raiders.</p>
        
        <form>
            <input type="button" class="button" value="Continue" onclick="pageturn()">
        </form>
    </div>
</div>

<!-- Page 5 -->
<div id="phil5" class="hidden">
    <div class="contentleft">
        <img src="<?php echo(base_url()); ?>assets/img/uprisingfist.png">
    </div>
    <div class="contentright">
        <h2>No Nonsense</h2>
        <p>Uprising has a simple idea: no nonsense.</p>
        
        <p>We don't accept players who care more about loot than playing. We don't accept players who
        need to stir up trouble when things don't go their way. We want a guild of well adjusted adults
        who we would enjoy hanging out with at a party. If you wouldn't enjoy the physical presence of
        everyone in your guild, then why spend 20+ hours a week with them in game? </p>
        
        <p>No nonsense gaming.</p>
        <form>
            <input type="button" class="button" value="Continue" onclick="pageturn()">
        </form>
    </div>
</div>

<!-- Page 6 -->
<div id="phil6" class="hidden">
    <div class="contentleft">
        <img src="<?php echo(base_url()); ?>assets/img/uprisingfist.png">
    </div>
    <div class="contentright">
        <h2>Our Recruitment Process</h2>
        <p>That is the basics of what Uprising is.</p>
        
        <p>To learn more about our recruitment process (including more information about our specifics, such as
        raid times and loot methods), or to continue an existing recruitment process,
        click begin.</p>
        
        <form>
            <input type="button" class="button" value="Begin" onclick="recruitredirect()">
        </form>
    </div>
</div>

<script>
var page = 0;

$(document).ready(function(){
    pageturn();
});


function pageturn()
{
    page++;
    var target = $('#phil' + page);
    $("#philin").fadeOut(700, function() {
//        $(".contentarticle").animate({height: target.height() + "px"}, function(){
            $("#philin").html(target.html());
            $("#philin").fadeIn(2000);
//        });

    });

}

function recruitredirect()
{
    window.location = "recruitment/start";
}
   

</script>
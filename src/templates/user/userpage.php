<style>
.card {
    max-width: 200px;
    transition: transform .2s;
}
.card:hover {
    cursor: pointer;
    -ms-transform: scale(1.03); /* IE 9 */
    -webkit-transform: scale(1.03); /* Safari 3-8 */
    transform: scale(1.03);
}
.game-img {
    width: 100%;
    height: 100%;
    border-radius: 5px;
}

.card-deck {
    display: flex;
    flex-flow: row wrap;
}

@media (min-width: 0px) {
    .card {
        max-width: 130px;
    }
    .gamecard {
        padding: 0 2px;
    }
}
@media (min-width: 400px) {
    .card {
        max-width: 110px;
    }
}
@media (min-width: 700px) {
    .card {
        max-width: 130px;
    }
}
@media (min-width: 990px) {
    .card {
        max-width: 150px;
    }
    .gamecard {
        padding: 0 5px;
    }
}
@media (min-width: 1200px) {
    .card {
        max-width: 190px;
    }
}
</style>

<div class="container">
    <h1>Hi, BrianGH</h1>
    <button class="btn btn-danger" style="border-radius: 20px;">Change Password</button><br><br>

    <h1>Your Favorites: </h1>
    <div id="gamecards" class="card-deck">

    </div>
    <form>
        <button class="btn-lg btn-danger" type="submit" style="border-radius: 20px;"><i class="fa fa-arrow-down"></i> Load more</button>    
    </form>
</div>

<script>
function addCard(title, img) {
    $("#gamecards").append('<div class="gamecard col-auto mb-4"><a class="card" href="game.php" style="margin: 0;"> <div title="' + title + '" id="g-title" data-toggle="tooltip" data-placement="top"> <img class="game-img" src="' + img + '"> </div></a></div><br>');
}
addCard("Fire Emblem: Three Houses", "https://images.igdb.com/igdb/image/upload/t_cover_big/co1n8t.jpg");
addCard("Fire Emblem: Three Houses", "https://images.igdb.com/igdb/image/upload/t_cover_big/co1j0g.jpg");
addCard("Fire Emblem: Three Houses", "https://images.igdb.com/igdb/image/upload/t_cover_big/co1iqw.jpg");
addCard("Fire Emblem: Three Houses", "https://images.igdb.com/igdb/image/upload/t_cover_big/co1r8b.jpg");
addCard("Fire Emblem: Three Houses", "https://images.igdb.com/igdb/image/upload/t_cover_big/co1tnr.jpg");
addCard("Fire Emblem: Three Houses", "https://images.igdb.com/igdb/image/upload/t_cover_big/co1rbi.jpg");
addCard("Fire Emblem: Three Houses", "https://images.igdb.com/igdb/image/upload/t_cover_big/co1vcp.jpg");
addCard("Fire Emblem: Three Houses", "https://images.igdb.com/igdb/image/upload/t_cover_big/co1n83.jpg");
addCard("Fire Emblem: Three Houses", "https://images.igdb.com/igdb/image/upload/t_cover_big/co1rgi.jpg");
addCard("Fire Emblem: Three Houses", "https://images.igdb.com/igdb/image/upload/t_cover_big/co1v2p.jpg");
</script>
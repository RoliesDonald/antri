<?php
$jumlah = strlen($nomor);
if ($jumlah == 1) {
    $nomor = $nomor;
} else if ($jumlah == 2) {
    $nomorA = substr($nomor, 0, 1);
    $nomorB = substr($nomor, 1, 1);
}
?>

<div id="audioplay">
    <audio id="audio1" src="./assets/ori/Airport_Bell3.mp3" type="audio" preload="auto"></audio>
    <audio id="audio2" src="./assets/ori/noantrian.mp3" type="audio" preload="auto"></audio>

    <audio id="audio3" src='<?php print "$_SESSION[huruf].mp3"; ?>' type="audio" preload="auto"></audio>
    <?php
    if ($jumlah == 1) {
        print "<audio id='audio4' src='./assets/ori/1.mp3' type='audio' preload='auto'></audio>";
    } elseif ($nomor == 10) { {
            print "<audio id='audio4' src='./assets/ori/sepuluh.mp3' type='audio' preload='auto'></audio>";
        }
    } elseif ($nomor == 11) { {
            print "<audio id='audio4' src='./assets/ori/sebelas.mp3' type='audio' preload='auto'></audio>";
        }
    } elseif ($jumlah == 2 and $nomor < 20) { {
            print "<audio id='audio4' src='./assets/ori/$nomorA.mp3' type='audio' preload='auto'></audio>";
            print "<audio id='audio4' src='./assets/ori/belas.mp3' type='audio' preload='auto'></audio>";
        }
    } elseif ($jumlah == 2 and $nomor > 19) { {
            print "<audio id='audio4' src='./assets/ori/$nomorA.mp3' type='audio' preload='auto'></audio>";
            print "<audio id='audio4' src='./assets/ori/belas.mp3' type='audio' preload='auto'></audio>";
        }
    }
    ?>
    <audio id="audio5" src="./assets/ori/loket.mp3" type="audio" preload="auto"></audio>
    <audio id="audio6" src="./assets/ori/1.mp3" type="audio" preload="auto"></audio>
</div>

<script>
    function playAudio() {
        var audio1 = document.getElementById('audio1');
        var audio2 = document.getElementById('audio2');
        var audio3 = document.getElementById('audio3');
        var audio4 = document.getElementById('audio4');
        var audio5 = document.getElementById('audio5');
        var audio6 = document.getElementById('audio6');
    }
</script>
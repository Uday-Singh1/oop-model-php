<?php

class Auto {
    private string $kleur;
    private int $zitplaatsen;
    protected int $passagiers = 0; // Initieer passagiers op 0
    protected int $snelheid = 0; // Initieer snelheid op 0

    public function __construct(string $kleur, int $zitplaatsen) {
        $this->kleur = $kleur;
        $this->zitplaatsen = $zitplaatsen;
    }

    public function nieuwe_passagier(int $aantal) {
        $totalePassagiers = $this->passagiers + $aantal;
        if ($totalePassagiers <= $this->zitplaatsen && $aantal > 0) {
            $this->passagiers += $aantal;
        } else {
            echo "Fout: Ongeldig aantal passagiers of geen plek meer in de auto.<br>";
        }
    }

    public function versnel(int $waarde) {
        if ($waarde > 0) {
            $this->snelheid += $waarde;
        } else {
            echo "Fout: Ongeldige versnellingswaarde.<br>";
        }
    }

    public function rem(int $waarde) {
        if ($waarde > 0 && $this->snelheid - $waarde >= 0) {
            $this->snelheid -= $waarde;
        } else {
            echo "Fout: Ongeldige remwaarde of auto staat al stil.<br>";
        }
    }

    public function getPassagiers(): int {
        return $this->passagiers;
    }

    public function getSnelheid(): int {
        return $this->snelheid;
    }
}

class Vrachtwagen extends Auto {
    private int $laadvermogen;
    private int $lading = 0; // Initialiseer lading op 0

    public function __construct(string $kleur, int $zitplaatsen, int $laadvermogen) {
        parent::__construct($kleur, $zitplaatsen);
        $this->laadvermogen = $laadvermogen;
    }

    public function lading(int $hoeveelheid) {
        if ($hoeveelheid > 0 && $this->lading + $hoeveelheid <= $this->laadvermogen) {
            $this->lading += $hoeveelheid;
        } else {
            echo "Fout: Ongeldige hoeveelheid lading of overbelasting van de vrachtwagen.<br>";
        }
    }

    public function versnel(int $waarde) {
        if ($waarde > 0) {
            $this->snelheid += $waarde * 0.8; // Versnel de vrachtwagen met 80% van de waarde
        } else {
            echo "Fout: Ongeldige versnellingswaarde voor vrachtwagen.<br>";
        }
    }
}

// Voorbeeldgebruik:
$auto = new Auto('rood', 5);
$auto->nieuwe_passagier(4);
$auto->versnel(50);

echo "Aantal passagiers in de auto: " . $auto->getPassagiers() . "<br>";
echo "Snelheid van de auto: " . $auto->getSnelheid() . " km/h<br>";

$vrachtwagen = new Vrachtwagen('blauw', 3, 5000);
$vrachtwagen->nieuwe_passagier(2);
$vrachtwagen->lading(800);
$vrachtwagen->versnel(40);

echo "Aantal passagiers in de vrachtwagen: " . $vrachtwagen->getPassagiers() . "<br>";
echo "Snelheid van de vrachtwagen: " . $vrachtwagen->getSnelheid() . " km/h<br>";

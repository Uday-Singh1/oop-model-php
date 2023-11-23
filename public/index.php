<?php

class Auto {
    private string $kleur;
    private int $zitplaatsen;
    protected int $passagiers = 0;
    protected int $snelheid = 0;

    public function __construct(string $kleur, int $zitplaatsen) {
        $this->kleur = $kleur;
        $this->zitplaatsen = $zitplaatsen;
    }

    public function nieuwe_passagier(int $aantal) {
        $totalePassagiers = $this->passagiers + $aantal;

        if ($totalePassagiers <= $this->zitplaatsen && $aantal > 0) {
            $this->passagiers += $aantal;
            // Verhoog de snelheid als er passagiers zijn toegevoegd
            $this->snelheid += $aantal * 10; 
        } else {
            if ($totalePassagiers > $this->zitplaatsen) {
                echo "Nee: Auto is vol, er zijn slechts {$this->zitplaatsen} zitplaatsen beschikbaar.<br>";
            } elseif ($aantal <= 0) {
                echo "Nee: Ongeldig aantal passagiers, aantal moet groter zijn dan 0.<br>";
            } elseif ($this->passagiers > 4) {
                echo "Nee: Maximaal 4 passagiers toegestaan voor de auto.<br>";
            }
        }
    }

    public function versnel(int $waarde) {
        if ($waarde > 0) {
            $this->snelheid += $waarde;
        } else {
            echo "Fout: fouten versnellingswaarde.<br>";
        }
    }

    public function rem(int $waarde) {
        if ($waarde > 0 && $this->snelheid - $waarde >= 0) {
            $this->snelheid -= $waarde;
        } else {
            echo "Fout: fouten remwaarde of auto rijdt niet<br>";
        }
    }

    public function getPassagiers(): int {
        return $this->passagiers;
    }

    public function getSnelheid(): int {
        return $this->snelheid;
    }

    public function getKleur(): string {
        return $this->kleur;
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
        } elseif ($hoeveelheid <= 0) {
            echo "Fout: Ongeldige hoeveelheid lading, waarde moet groter zijn dan 0.<br>";
        } else {
            echo "Waarschuwing: Overbelasting van de vrachtwagen. Lading mag niet hoger zijn dan {$this->laadvermogen} kg.<br>";
        }
    }

    public function nieuwe_passagier(int $aantal) {
        if ($aantal === 0) {
            echo "Waarschuwing: Er zijn geen passagiers in de vrachtwagen.<br>";
        } elseif ($aantal > 2) {
            echo "Waarschuwing: De vrachtwagen is vol met passagiers.<br>";
        } else {
            parent::nieuwe_passagier($aantal);
        }
    }

    public function versnel(int $waarde) {
        if ($waarde > 0) {
            $this->snelheid += $waarde; 
        } else {
            echo "Fout: Ongeldige versnellingswaarde voor vrachtwagen.<br>";
        }
    }
    
}


$auto = new Auto('rood', 4);    //kies zitplaatsen
$auto->nieuwe_passagier(1);     //pas de aantal van passagiers aan

//bij 0 passagiers rijdt de voertuig niet dus is de snelheid 0


echo "Kleur van de Auto: " . $auto->getKleur() . "<br>";
echo "Aantal passagiers Auto: " . $auto->getPassagiers() . "<br>";
echo "Snelheid van de Auto: " . $auto->getSnelheid() . " km/h<br>";

$vrachtwagen = new Vrachtwagen('blauw', 3, 5000);
$vrachtwagen->nieuwe_passagier(1);   //pas de aantal van passagiers aan (hoger dan 3 of lager dan 1 geeft een fout)
$vrachtwagen->lading(1100);    // Dit zou een fout moeten geven
$vrachtwagen->versnel(1);

echo "Kleur van de Vrachtwagen: " . $vrachtwagen->getKleur() . "<br>";
echo "Aantal passagiers in de Vrachtwagen: " . $vrachtwagen->getPassagiers() . "<br>";
echo "Snelheid van de Vrachtwagen: " . $vrachtwagen->getSnelheid() . " km/h<br>";


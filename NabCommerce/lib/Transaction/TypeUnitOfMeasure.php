<?php


/*
 * LICENSE: This source file is subject to version 4.0 of the CC BY 4.0 license
 * that is available through the world-wide-web at the following URI:
 * http://creativecommons.org/licenses/by/4.0/.  If you did not receive a copy of
 * the CC BY 4.0 License and are unable to obtain it through the web, please
 * send a note to daniel.boorn@gmail.com so we can mail you a copy immediately.
 *
 * @author Daniel Boorn <daniel.boorn@gmail.com>
 * @license http://creativecommons.org/licenses/by/4.0/ CC BY 4.0 *
 * @package NabCommerce\Service
 */

 

namespace NabCommerce\Transaction;

class TypeUnitOfMeasure
{
    const __default = 'NotSet';
    const NotSet = 'NotSet';
    const Acre = 'Acre';
    const AmpereHour = 'AmpereHour';
    const Ampere = 'Ampere';
    const Year = 'Year';
    const TroyOunceOrApothecariesOunce = 'TroyOunceOrApothecariesOunce';
    const Are = 'Are';
    const AlcoholicStrengthByMass = 'AlcoholicStrengthByMass';
    const AlcoholicStrengthByVolume = 'AlcoholicStrengthByVolume';
    const StandardAtmosphere = 'StandardAtmosphere';
    const TechnicalAtmosphere = 'TechnicalAtmosphere';
    const Bar = 'Bar';
    const BoardFoot = 'BoardFoot';
    const BrakeHorsePower = 'BrakeHorsePower';
    const BillionEURTrillionUS = 'BillionEURTrillionUS';
    const DryBarrelUS = 'DryBarrelUS';
    const BarrelUSPetroleumEtc = 'BarrelUSPetroleumEtc';
    const Becquerel = 'Becquerel';
    const BritishThermalUnit = 'BritishThermalUnit';
    const BushelUS = 'BushelUS';
    const BushelUK = 'BushelUK';
    const CarryingCapacityInMetricTon = 'CarryingCapacityInMetricTon';
    const Candela = 'Candela';
    const DegreeCelsius = 'DegreeCelsius';
    const Hundred = 'Hundred';
    const Centigram = 'Centigram';
    const CoulombPerKilogram = 'CoulombPerKilogram';
    const HundredLeave = 'HundredLeave';
    const Centilitre = 'Centilitre';
    const Centiliter = 'Centiliter';
    const SquareCentimetre = 'SquareCentimetre';
    const SquareCentimeter = 'SquareCentimeter';
    const CubicCentimetre = 'CubicCentimetre';
    const CubicCentimeter = 'CubicCentimeter';
    const Centimetre = 'Centimetre';
    const Centimeter = 'Centimeter';
    const HundredPack = 'HundredPack';
    const CentalUK = 'CentalUK';
    const Coulomb = 'Coulomb';
    const MetricCarat = 'MetricCarat';
    const Curie = 'Curie';
    const HundredPoundsCWTHundredWeightUS = 'HundredPoundsCWTHundredWeightUS';
    const HundredWeightUK = 'HundredWeightUK';
    const Decare = 'Decare';
    const TenDay = 'TenDay';
    const Day = 'Day';
    const Decade = 'Decade';
    const Decilitre = 'Decilitre';
    const Deciliter = 'Deciliter';
    const SquareDecimetre = 'SquareDecimetre';
    const SquareDecimeter = 'SquareDecimeter';
    const CubicDecimetre = 'CubicDecimetre';
    const CubicDecimeter = 'CubicDecimeter';
    const Decimetre = 'Decimetre';
    const Decimeter = 'Decimeter';
    const DozenPiece = 'DozenPiece';
    const DozenPair = 'DozenPair';
    const DisplacementTonnage = 'DisplacementTonnage';
    const DramUS = 'DramUS';
    const DramUK = 'DramUK';
    const DozenRoll = 'DozenRoll';
    const DrachmUK = 'DrachmUK';
    const DecitonneCentnerMetric100KgQuintalMetric100Kg = 'DecitonneCentnerMetric100KgQuintalMetric100Kg';
    const Pennyweight = 'Pennyweight';
    const Dozen = 'Dozen';
    const DozenPack = 'DozenPack';
    const DegreeFahrenheit = 'DegreeFahrenheit';
    const Farad = 'Farad';
    const Foot = 'Foot';
    const SquareFoot = 'SquareFoot';
    const CubicFoot = 'CubicFoot';
    const Gigabecquerel = 'Gigabecquerel';
    const GramOfFissileIsotope = 'GramOfFissileIsotope';
    const GreatGross = 'GreatGross';
    const GillUS = 'GillUS';
    const GillUK = 'GillUK';
    const DryGallonUS = 'DryGallonUS';
    const GallonUK = 'GallonUK';
    const GallonUS = 'GallonUS';
    const Gram = 'Gram';
    const Grain = 'Grain';
    const Gross = 'Gross';
    const GrossRegisterTon = 'GrossRegisterTon';
    const GigawattHour = 'GigawattHour';
    const Hectare = 'Hectare';
    const Hectobar = 'Hectobar';
    const HundredBox = 'HundredBox';
    const Hectogram = 'Hectogram';
    const HundredInternationalUnit = 'HundredInternationalUnit';
    const Hectolitre = 'Hectolitre';
    const Hectoliter = 'Hectoliter';
    const MillionCubicMetre = 'MillionCubicMetre';
    const MillionCubicMeter = 'MillionCubicMeter';
    const Hectometre = 'Hectometre';
    const Hectometer = 'Hectometer';
    const HectolitreOfPureAlcohol = 'HectolitreOfPureAlcohol';
    const HectoliterOfPureAlcohol = 'HectoliterOfPureAlcohol';
    const Hertz = 'Hertz';
    const Hour = 'Hour';
    const Inch = 'Inch';
    const SquareInch = 'SquareInch';
    const CubicInch = 'CubicInch';
    const Joule = 'Joule';
    const Kilobar = 'Kilobar';
    const Kelvin = 'Kelvin';
    const Kilogram = 'Kilogram';
    const KilogramPerSecond = 'KilogramPerSecond';
    const Kilohertz = 'Kilohertz';
    const Kilojoule = 'Kilojoule';
    const KilometrePerHour = 'KilometrePerHour';
    const KilometerPerHour = 'KilometerPerHour';
    const SquareKilometre = 'SquareKilometre';
    const SquareKilometer = 'SquareKilometer';
    const KilogramPerCubicMetre = 'KilogramPerCubicMetre';
    const KilogramPerCubicMeter = 'KilogramPerCubicMeter';
    const Kilometre = 'Kilometre';
    const Kilometer = 'Kilometer';
    const KilogramOfNitrogen = 'KilogramOfNitrogen';
    const KilogramNamedSubstance = 'KilogramNamedSubstance';
    const Knot = 'Knot';
    const Kilopascal = 'Kilopascal';
    const KilogramOfPotassiumHydroxideCausticPotash = 'KilogramOfPotassiumHydroxideCausticPotash';
    const KilogramOfPotassiumOxide = 'KilogramOfPotassiumOxide';
    const KilogramOfPhosphorusPentoxidePhosphoricAnhydride = 'KilogramOfPhosphorusPentoxidePhosphoricAnhydride';
    const KilogramOfSubstance90PercentDry = 'KilogramOfSubstance90PercentDry';
    const KilogramOfSodiumHydroxideCausticSoda = 'KilogramOfSodiumHydroxideCausticSoda';
    const Kilotonne = 'Kilotonne';
    const KilogramOfUranium = 'KilogramOfUranium';
    const KilovoltAmpere = 'KilovoltAmpere';
    const Kilovar = 'Kilovar';
    const Kilovolt = 'Kilovolt';
    const KilowattHour = 'KilowattHour';
    const Kilowatt = 'Kilowatt';
    const Pound = 'Pound';
    const TroyPoundUS = 'TroyPoundUS';
    const Leaf = 'Leaf';
    const LitreOfPureAlcohol = 'LitreOfPureAlcohol';
    const LiterOfPureAlcohol = 'LiterOfPureAlcohol';
    const TonUKorLongTonUS = 'TonUKorLongTonUS';
    const Litre = 'Litre';
    const Liter = 'Liter';
    const Lumen = 'Lumen';
    const Lux = 'Lux';
    const MegaLitre = 'MegaLitre';
    const MegaLiter = 'MegaLiter';
    const Megametre = 'Megametre';
    const Megameter = 'Megameter';
    const Megawatt = 'Megawatt';
    const ThousandStandardBrickEquivalent = 'ThousandStandardBrickEquivalent';
    const ThousandBoardFeet = 'ThousandBoardFeet';
    const Millibar = 'Millibar';
    const Millicurie = 'Millicurie';
    const Milligram = 'Milligram';
    const Megahertz = 'Megahertz';
    const SquareMile = 'SquareMile';
    const Thousand = 'Thousand';
    const Minute = 'Minute';
    const Million = 'Million';
    const MillionInternationalUnit = 'MillionInternationalUnit';
    const MilliardBillionUS = 'MilliardBillionUS';
    const Millilitre = 'Millilitre';
    const Milliliter = 'Milliliter';
    const SquareMillimetre = 'SquareMillimetre';
    const SquareMillimeter = 'SquareMillimeter';
    const CubicMillimetre = 'CubicMillimetre';
    const CubicMillimeter = 'CubicMillimeter';
    const Millimetre = 'Millimetre';
    const Millimeter = 'Millimeter';
    const Month = 'Month';
    const Megapascal = 'Megapascal';
    const CubicMetrePerHour = 'CubicMetrePerHour';
    const CubicMeterPerHour = 'CubicMeterPerHour';
    const CubicMetrePerSecond = 'CubicMetrePerSecond';
    const CubicMeterPerSecond = 'CubicMeterPerSecond';
    const MetrePerSecondSquared = 'MetrePerSecondSquared';
    const MeterPerSecondSquared = 'MeterPerSecondSquared';
    const SquareMetre = 'SquareMetre';
    const SquareMeter = 'SquareMeter';
    const CubicMetre = 'CubicMetre';
    const CubicMeter = 'CubicMeter';
    const Metre = 'Metre';
    const Meter = 'Meter';
    const MetrePerSecond = 'MetrePerSecond';
    const MeterPerSecond = 'MeterPerSecond';
    const MegavoltAmpere = 'MegavoltAmpere';
    const MegawattHour1000KWH = 'MegawattHour1000KWH';
    const NumberOfArticles = 'NumberOfArticles';
    const NumberOfBobbins = 'NumberOfBobbins';
    const NumberOfCells = 'NumberOfCells';
    const Newton = 'Newton';
    const NumberOfInternationalUnits = 'NumberOfInternationalUnits';
    const NauticalMile = 'NauticalMile';
    const NumberOfPacks = 'NumberOfPacks';
    const NumberOfParcels = 'NumberOfParcels';
    const NumberOfPairs = 'NumberOfPairs';
    const NumberOfParts = 'NumberOfParts';
    const NumberOfRolls = 'NumberOfRolls';
    const NetRegisterTon = 'NetRegisterTon';
    const Ohm = 'Ohm';
    const Ounce = 'Ounce';
    const FluidOunceUS = 'FluidOunceUS';
    const FluidOunceUK = 'FluidOunceUK';
    const Pascal = 'Pascal';
    const Piece = 'Piece';
    const ProofGallon = 'ProofGallon';
    const DryPintUS = 'DryPintUS';
    const PintUK = 'PintUK';
    const LiquidPintUS = 'LiquidPintUS';
    const QuarterOfAYear = 'QuarterOfAYear';
    const DryQuartUS = 'DryQuartUS';
    const QuartUK = 'QuartUK';
    const LiquidQuartUS = 'LiquidQuartUS';
    const QuarterUK = 'QuarterUK';
    const RevolutionsPerMinute = 'RevolutionsPerMinute';
    const RevolutionsPerSecond = 'RevolutionsPerSecond';
    const HalfYear6Months = 'HalfYear6Months';
    const Score = 'Score';
    const Scruple = 'Scruple';
    const Second = 'Second';
    const Set = 'Set';
    const ShippingTon = 'ShippingTon';
    const Siemens = 'Siemens';
    const MileStatuteMile = 'MileStatuteMile';
    const ShortStandard7200Matches = 'ShortStandard7200Matches';
    const StoneUK = 'StoneUK';
    const TonUSOrShortTonUKUS = 'TonUSOrShortTonUKUS';
    const KiloampereHourThousandAmpereHour = 'KiloampereHourThousandAmpereHour';
    const TonneMetricTon = 'TonneMetricTon';
    const TenPair = 'TenPair';
    const ThousandCubicMetrePerDay = 'ThousandCubicMetrePerDay';
    const ThousandCubicMeterPerDay = 'ThousandCubicMeterPerDay';
    const TrillionEUR = 'TrillionEUR';
    const TonneOfSubstance90PercentDry = 'TonneOfSubstance90PercentDry';
    const TonOfSteamPerHour = 'TonOfSteamPerHour';
    const Volt = 'Volt';
    const Cord = 'Cord';
    const Weber = 'Weber';
    const Week = 'Week';
    const WattHour = 'WattHour';
    const Standard = 'Standard';
    const Watt = 'Watt';
    const SquareYard = 'SquareYard';
    const CubicYard = 'CubicYard';
    const Yard = 'Yard';


}

# Laravel-PD

## Teorija

- Kas ir api?
  API jeb Application Programming Interface ļauj programmām mijiedarboties vienai ar otru, nodrošina veidu, kā programmētās sistēmas var izmantot citu programmuy funkcionalitāti.
- Kā deklerēt mainīgo PHP valodā
  Mainīgo nosaukums sālkas ar $ simbolu, piemēram: $nosaukums = "Didars"
- Kādu arhitektūru izmanto Laravel, paskaidro kā tā strādā:
  Laravel izmanto Model-View-Controller (MVC) arhitektūras modeli
  Model: atbild par datu pārvaldību, sazinās ar datu bāzi, veic datu ieguvi. Laravel izmanto Eloquent ORM ( Object-Relational Mapping), ļauj veikt datu bāzes darbības objektu veidā.
  View: Nodrošina saskarni un attēlo datus, Laravel izmanto Blade.
  Controller: Saņem pieprasījumus no lietotāja, apstrādā tos un sazinās ar Model, lai iegūtu vai mainītu datus, Controiller nodrošina saikni starp modeli un view.
- Kas ir ORM, kāpēc to izmanto tīra SQL vietā?
  ORM ( Object-Relational Mapping) programmēšanas tehnika, kas attēlo datu bāzes ierakstus kā objektus.
  - Kāpec izmantot?
    ORM ļauj strādāt ar datiem kā ar objektiem, kods smukāks.
    Kodu var pārnest uz citu datu bāzes sistēmu.
    Neatkārtojas kods, jo objekti un to attiecības tiek aprakstītas kodā, nevis atsevišķā SQL vaicājumā.
    ORM var automātiski pielāgot datu bāzi un optimizē datu pieprasījumus.
- Uzraksti Eloquent ORM pieprasījumu modelim User, kur nepieciešams iegūt visus lietotājus kuriem reitings ir lielāks par 4. Lietotāju tabulas struktūra:
   $User = Users::where('rating', '>' 4)->get()

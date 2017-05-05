<?php
/**
 * domyślny motyw implentacji Menedzera osobistego
 *
 * Available variables:
 * - $title: tytuł .Napis na liście zadań.
 * - $items: tablica obiektów z bazy danych
 */
   /**
     * ====================INFORMACJA==============================
     *  Literka " l " po funkcji return oznacza stworzenie
     *  nowego linku w który będzie można kliknąć
     *   przykład : return l(' Stworz nowe menedzerosobisty' , 'menedzerosobisty/new');
     * ============================================================
     */
?>
<strong><div class="menedzerosobisty-nowy-link-gora">
    <?php echo  l('Stwórz wpis', 'menedzerosobisty/new'); ?></div></strong>>
<table>
<?php if (!empty($title)): ?>
<caption>
<?php echo $title; ?>
</caption>
<?php endif; ?>
  <thead>
    <tr>
      <th> <i>Menedzer Osobisty</i></th>
      
      <th><u>Edytuj</u></th>
      
      <th><u>Usun</u></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($items as $item): ?>
      <tr>
        <td>
            
          <em>  <?php echo $item->title; ?> </em>
        </td>
        <td>
           <em> <?php echo l(t('Edytuj'), "menedzerosobisty/$item->id/edit"); ?></em>
        </td>
        <td>
           <em> <?php echo l(t('Usun'), "menedzerosobisty/$item->id/delete"); ?></em>
        </td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<strong><div class="menedzerosobisty-nowy-link-dol">
    <?php echo l('Stwórz wpis', 'menedzerosobisty/new'); ?></div></strong>>


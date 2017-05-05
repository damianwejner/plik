<?php
/**
 * @file
 * domyślny motyw implentacji Menedzera osobistego
 *
 * Available variables:
 * - $title: tytuł .Napis na liście zadań.
 * - $items: tablica obiektów z bazy danych
 */
?>
<div class="menedzerosobisty-new-link-top"><?php echo l('Stwórz wpis', 'menedzerosobisty/new'); ?></div>
<table>
  <?php if (!empty($title)): ?>
    <caption><?php echo $title; ?></caption>
  <?php endif; ?>
  <thead>
    <tr>
      <th>Menedzer Ososbisty</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($items as $item): ?>
      <tr>
        <td><?php echo $item->title; ?></td>
        <td><?php echo l(t('edit'), "menedzerosobisty/$item->id/edit"); ?></td>
        <td><?php echo l(t('delete'), "menedzerosobisty/$item->id/delete"); ?></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<div class="menedzerosobisty-new-link-bottom"><?php echo l('Stwórz wpis', 'menedzerosobisty/new'); ?></div>


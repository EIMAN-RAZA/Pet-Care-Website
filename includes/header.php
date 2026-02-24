<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PetCare<?php echo isset($pageInfo['title']) ? ' | ' . $pageInfo['title'] : ''; ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
  <?php if(isset($pageInfo['custom_css'])) echo $pageInfo['custom_css']; ?>
</head>
<body <?php if(isset($pageInfo['body_class'])) echo 'class="' . $pageInfo['body_class'] . '"'; ?>>

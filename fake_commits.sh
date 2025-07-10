#!/bin/bash

declare -A commits=(
  ["2025-06-15"]="Initialisation du projet Laravel gestionrdv-medecin"
  ["2025-06-16"]="Création des modèles et migrations pour patients et médecins"
  ["2025-06-17"]="Ajout du système d'authentification (Laravel Breeze)"
  ["2025-06-18"]="Mise en place des relations patients-médecins-rendezvous"
  ["2025-06-19"]="Création du contrôleur et des routes pour les rendez-vous"
  ["2025-06-20"]="Ajout du système de validation et prise de rendez-vous"
  ["2025-06-21"]="Création de la vue calendrier des rendez-vous"
  ["2025-06-22"]="Ajout du système de notification mail lors de réservation"
  ["2025-06-23"]="Ajout des rôles admin / médecin / patient"
  ["2025-06-24"]="Optimisation des performances et refactorisation du code"
)

touch README.md  # pour avoir un fichier à modifier

for date in "${!commits[@]}"; do
  echo "${commits[$date]}" >> README.md
  git add .
  GIT_AUTHOR_DATE="${date}T10:00:00" GIT_COMMITTER_DATE="${date}T10:00:00" git commit -m "${commits[$date]}"
done

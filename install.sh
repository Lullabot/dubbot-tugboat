drush site-install --yes
drush user:password admin admin
drush user:role:add administrator admin
drush config-set system.site uuid 28350631-bb36-48a0-a913-6d4998c3c9db --yes
drush entity-delete shortcut_set --yes
drush config-import --yes

# For restoring shortcuts.
drush php-eval 'include_once "core/profiles/standard/standard.install"; standard_install();'

drush en dubbot_default_content --yes

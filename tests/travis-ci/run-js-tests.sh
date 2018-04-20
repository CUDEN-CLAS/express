#!/usr/bin/env bash

if [ "${BUNDLE_NAME}" != "null" ]; then
  cd ${ROOT_DIR}/drupal/sites/all/modules/${BUNDLE_NAME}
else
  cd ${ROOT_DIR}/drupal/profiles/express
fi

EXPRESS_COMMIT_HAS_JS="$(git log -2 --pretty=%B | awk '/./{line=$0} END{print line}' | grep '===js')"
echo "commit has JS? - ${EXPRESS_COMMIT_HAS_JS}"

# Run JS tests if merging PR into dev or has JS in it.
if [ "${TRAVIS_EVENT_TYPE}" == "push" ] || [ "${EXPRESS_COMMIT_HAS_JS}" ]; then
  echo "Running JS tests..."
  ${ROOT_DIR}/drupal/profiles/express/tests/behat/bin/behat --stop-on-failure --strict --config ${ROOT_DIR}/drupal/profiles/express/tests/behat/behat.travis.yml --verbose --tags '~@exclude_all_bundles&&~@broken&&@javascript'
  earlyexit
else
  echo "Not Running JS tests..."
fi

exit 0

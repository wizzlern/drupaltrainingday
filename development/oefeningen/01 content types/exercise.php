<?php

/**
 * Contains exercises to create a content type for game reviews.
 * Estimated time: 45 min.
 */

// ==== Step 1 ====
// As Editor I want to create game reviews. Every game should have an age
// category.
// - Create a content type 'game' at Structure > Content types > Add content
//   type (/admin/structure/types/add)
//   - Name: Game
//   - Description: Game review
//   - Publishing options > Promoted to front page: Off
//   - Menu settings > Main navigation: Off
// - Save the content type.

// ==== Step 2 ====
// Add a field for the age category.
// - Add a field at Structure > Content types > Game > Manage field > Add field
//   (/admin/structure/types/manage/game/fields)
//   - Field type: List (integer)
//   - Label: Allowed age
//     (machine name: field_allowed_age (<- this is important))
//   - Allowed values: 3, 7, 12, 16, 18 (one value per line)
//   - Required: Yes
// - Save the settings.
// - Create one game review and check the result.

// ==== Step 3 ====
// As Site owner I want that users only see game reviews that match their age.
// - Add an age field to the user profile at Configuration > People > Account
//   settings > Manage fields > Add field
//   (/admin/config/people/accounts/fields/add-field).
//   - Field type: Number (integer)
//   - Label: Age
//   - Machine name: field_user_age (<- this is important))
//   - Required: Yes
//   - Minimum: 0
//   - Save the settings.
// - Change the order of the field on the form at Configuration > People > Account
//   settings > Manage form fields (/admin/config/people/accounts/form-display).
//   - Place the field below 'User name and password'.
//   - Save the settings.
// - Create a new user at People > Add user (admin/people/create) and check the
//   result.

// ==== Step 4 ====
// As visitor I want to view a Game review.
// - Modify the 'Default' View mode of the Game review to match the design at
//   Structure > Content types > Game > Manage display
//   (/admin/structure/types/manage/game/display)
//   - Hidden/visible fields
//   - The order of the fields
//   - Hidden/visible labels
//   - Adjust as much as possible in the View mode. What can not be configured
//     can be changed in code later.
// - Create a review and check the result.

// ==== Step 5 ====
// As Editor I want the input fields of a Game review to have a logical order.
// That makes editing the content easier.
// - Modify the Form view mode of the Game review to match the View mode at
//   at Structure > Content types > Game > Manage form display
//   (/admin/structure/types/manage/game/form-display)
//   - The order of the fields
//   - The labels of the fields
// - Edit a game review and check the result.

// ==== Step 6 ====
// As visitor I don't want my age to be visible for other users of the site.
// - Hide the Age field of a user profile at  Configuration > People > Account
//   settings > Manage display.
// - Go to a user profile and check the result.

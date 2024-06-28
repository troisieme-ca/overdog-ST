# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.1.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.6.1] - 2024-06-28

### Added

- Set robotIndex to noindex, nofollow on 404 page

### Changed

- Update robots.txt to disallow all pages if in dev or staging environment
- Remove indexing in layout template if in dev or staging environment

### Updated

- Update Craft CMS version 4.9.5 to 4.10.3
- Update Redactor plugin version 3.0.4 to 3.1.0

## [1.6.0] - 2024-05-30

### Added

- Add caption field for assets (images)
- Add shared image component

### Changed

- Update Craft CMS version from 4.8.9 to 4.9.5
- Remove responsive values for --spacing

### Fixed

- Fix responsive table
- Fix typo in robots.txt filename

## [1.5.1] - 2024-05-01

### Fixed

- Fix env var in robot.txt

## [1.5.0] - 2024-04-16

### Added

- Add @web alias
- Add new filesystem "Asset transforms"

### Changed

- Associate assets volumes transform filesystem to new "Asset transforms" filesystem
- Update robot.txt to disallow new folder asset-transforms
- Update Craft CMS version from 4.8.8 to 4.8.9

## [1.4.0] - 2024-04-10

### Added

- Add tailwind classes to Skip to main content link

### Changed

- Add spaces between brackets and value in lang attribute on html tag
- Rename components folder to shared and adjust tailwind config consequently
- Update Craft CMS version from 4.8.4 to 4.8.8
- Update plugin AWS-S3 version from 2.2.0 to 2.2.1

### Fixed

- Fixed Skip to main content link in removing # in main tag id

## [1.3.0] - 2024-03-21

### Added

- Add custom Redactor plugin for non-breaking space
- Add new Redactor config file (extra-light.json)

### Changed

- Update Redactor config files (minimalist.json, light.json, medium.json, full.json)
- Update Craft CMS version from 4.8.2 to 4.8.4

### Fixed

- Fixed extension output in phoneHref macro

## [1.2.0] - 2024-03-14

### Added

- Add "Alternative text" field to "Images" volume
- Add Selection label "Ajouter une image" to seoOgImage field
- Set seoTitle for 404 template
- Add plugin Retour without installing it
- Add missing translations

### Changed

- Update project dependencies
- Update readme
- Update licence
- Update project general configs
- Set French as the primary language and updated env variable consequently
- Changed singleHome name from "Home" to "Accueil"
- Install Redator by default
- Update Craft CMS version from 4.8.1 to 4.8.2
- Update aws-s3 plugin from 2.1.0 to 2.2.0

### Fixed

- Restrict allowed file types to "Image" for seoOgImage field
- Change - for _ in locales

## [1.1.0] - 2024-03-12

### Changed

- Update Craft CMS Version from 4.5.12 to 4.8.1


## [1.0.0] - 2024-03-12

- Initial stable release.
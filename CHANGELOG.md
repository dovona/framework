# Change Log
All notable changes to Dovona's Framework will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/) and see this as a [reference](http://keepachangelog.com/).

## [0.0.3] 2017-07-04

### Added
- .gitignore file added.

### Changes
- We are going to Git.

### Removed
- WebStorm files removed from cache as that was already ignored.


## [0.0.2] 2017-06-28

### Added
- ProcessResult class added.

### Fixed
- Enum::isValid() fixes the $this that was accessed into a static method.


## [0.0.1] 2016-10-27 

### Added
- HTTP Method enumeration type added (Dovona\\Foundation\\Types\\Http\\Method class).
- Months name enumeration type added (\\Dovona\\Foundation\\Types\\Date\\Month class).
- Abstract \\Dovona\\Foundation\\Types\\Enum class added to emulate enumeration classes on PHP.
- equals() method added to the Enum class in order to test if actual Enum value is equal with a given one.
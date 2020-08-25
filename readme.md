# Built by Cactus Plugin Test

Welcome to the Built by Cactus plugin test!

This test is supposed to test your ability to implement features within a WordPress plugin as well as fixing any security issues you may come across whilst doing so.

## Introduction

The functionality of the plugin is fairly simple, when there's a failed WordPress login the details should be stored in the database.

On initial activation the plugin will create a new table within your database called `login_audit`, this table should be used to store the failed logins.

There will also be a new option created within the admin dashboard. You can find this under `Tools > Failed logins`. This page offers some settings and should also list out the contents of the `login_audit` table.

## Tasks

The plugin currently has some issues saving the failed logins into the database.  Your first task is to get this working.

Once the main functionailty of the plugin is working, please take some time to look at the following:

* Security Issues
* I18n issues
* Adherence to the WordPress coding standards

Please don't re-write the plugin from scratch, we want to see how you work with code that already exists and are more interested in how you approach the tasks than how well you can refactor the plugin code :) 

## Committing your work

You should work in feature branches following the [Git Flow](https://builtbycactus.github.io/docs/git/setup) methodology. When you've completed your feature, open a [pull request](https://builtbycactus.github.io/docs/git/pull-requests) and add the tag `Ready for review`. This will let us know that you're ready for us to review the codebase.

Your commits should be granular and should show how you approach the problem.

## Helpful Links

You may find some help by looking at the following pages:

* [WordPress Coding Standards](https://make.wordpress.org/core/handbook/coding-standards/)
* [Security](https://developer.wordpress.org/plugins/security/)
* [i18n](https://developer.wordpress.org/plugins/internationalization/)
# Overdog - A scaffolding project for Craft CMS 4.x

This Craft CMS starter project is for developers who want to build a website or small web application from a solid foundation based on best practices.

## Version
1.3.0

## Installation

Navigate to your web projects folder. You can change the last term "overdog" - this will be the name of your project folder.

### Create a new project

```bash
  composer create-project troisieme/overdog overdog
```

### Install Node.js packages for development and compilation

```bash
  yarn install
```

### Set up a new local server host and database

1. Create a new Host on your local server.
2. Set up a MySQL database. You can use the username and password as "root/root", as this will never be deployed.
3. Point this host to the web folder of your project.

> [!NOTE] 
> If you're using MAMP Pro, make sure "Allow network access to MySQL" is checked in the MySQL tab.
 
### Update certain variables in the .env file

In the .env file located at the root of your project, fill in the following details. You can leave the other variables empty for the time being and configure them later:

- `CRAFT_SYSTEM_NAME` — Project name - this will be visible in the Control Panel; enclose it in quotes.
- `SITE_URL` — The main development URL of your host (without trailing slash).
- `SITE_GROUP` — Name of the locale (language) group. Likely the project name.
- `CRAFT_DB_DRIVER` — "mysql"
- `CRAFT_DB_SERVER` — "localhost" or "127.0.0.1" (as an example).
- `CRAFT_DB_PORT` — Commonly "3306" or "8889".
- `CRAFT_DB_DATABASE` — Name of the database you created.
- `CRAFT_DB_USER` — Username (possibly "root").
- `CRAFT_DB_PASSWORD` — Password (possibly "root").
- `CRAFT_DB_SCHEMA` — "public".
- `CRAFT_DB_TABLE_PREFIX` — Database table prefix, typically left empty in most scenarios.

-----

## Install Craft CMS

In your project folder, execute the following in the terminal.

```bash
  php craft setup/welcome
```

> [!NOTE] 
> When prompted for the SITE NAME, SITE URL, and LANGUAGE during installation, simply press Enter. Your installation will align with the settings from your .env file. Should you have maintained the default Overdog details in the env file, you'll have the flexibility to adjust them post-installation.

-----

## Create a Git repo with your git provider

Set up your project with your provider.

> [!WARNING]
> **Do not** check "Initialize repository with a readme"; keep it entirely empty.

### Integrate Git with your local project

1. Add the previously created project folder to your software or terminal to initialize Git (the method may vary slightly depending on the tool you're using).
2. After the first commit, consider renaming your local branch to "develop".
3. Add the remote link, ideally using SSH, of the project you set up with your provider.
4. Make an initial commit on the "develop" branch and push it to create a new "develop" branch on the remote repository.


## Documentation

[Click here for documentation](https://st.overdog.io/)
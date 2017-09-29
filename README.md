**Step 1: Add "repositories" to composer.json**
	
	"repositories": [
        {
			"type": "vcs",
            "url": "https://github.com/pdffiller/lib-laravel-env-to-consul.git"
        }
    ]

**Step 2: Run** "composer require pdffiller/lib-laravel-env-to-consul" **in command prompt**

**Step 3: Add to \config\app.php** 'providers' => [... \pdffiller\LibLaravelEnvToConsul\ConsulConfigServiceProvider::class
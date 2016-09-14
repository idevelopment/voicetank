<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;

/**
 * Class LanguageMiddleware
 *
 * @see:phpunit
 * @package      App\Http\Middleware
 */
class LanguageMiddleware
{
    /**
     * The supported languages.
     * @var array
     */
    protected static $supportedLanguages = ['nl', 'en'];

    /**
     * Handle an incoming request.
     *
     * @param  Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $language = (Input::get('lang')) ?: Session::get('lang');
        $this->setSupportedLanguage($language);
        return $next($request);
    }

    /**
     * See if the language is supported.
     *
     * @param  string $lang
     * @return bool
     */
    private function isLanguageSupported($lang)
    {
        return in_array($lang, self::$supportedLanguages);
    }

    /**
     * Set the language.
     *
     * @param  string $lang
     * @return voide
     */
    private function setSupportedLanguage($lang)
    {
        if ($this->isLanguageSupported($lang)) {
            App::setLocale($lang);
            Session::put('lang', $lang);
        }
    }
}

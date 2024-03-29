<?php defined('SYSPATH') OR die('No direct access allowed.');

abstract class Editor_Core {

	protected static $_rendered = array(
		'css'       => array(),
		'js'        => array(),
	);

	/**
	 * @var Editor_Driver
	 */
	//protected $_driver;
	/**
	 * @var Array
	 */
	protected $_config;
	/**
	 * Default WYSIWYG options
	 *
	 * @var array
	 */
	protected $_options = array();
	protected $_lang;

	protected $_js_prefix  = TRUE;
	protected $_css_prefix = TRUE;

	protected $_js_rendered = FALSE;
	protected $_css_rendered = FALSE;

	protected function _js()
	{
		return array();
	}

	protected function _css()
	{
		return array();
	}

	public $template;

    private function escape_id($id)
    {
        return str_replace(array('[', ']', '='), array('-', '', '-'), $id);
    }

	public function render($display = FALSE, $name = NULL, $create_new = FALSE)
	{
		if ($name)
		{
			$this->_options['name'] = $name;
		}

		if (empty($this->template))
		{
			$this->template = 'editor/'.$this->name;
		}

		if ( ! isset($this->_options['value']))
		{
			$this->_options['value'] = '';
		}
        if (empty($this->_options['id'])) {
		    $this->_options['id'] = $this->escape_id($this->_options['name']);
        } else {
            $this->_options['id'] = $this->escape_id($this->_options['id']);
        }

		$template = View::factory($this->template)
			->set('create_new', $create_new)
			->set('name', $this->_options['name'])
			->set('id', $this->_options['id'])
			->set('options', $this->_options);

		$result = '';
		if ($create_new)
		{
			$result .= sprintf('<textarea name="%s" id="%s">%s</textarea>',
			        $this->_options['name'],
			        $this->_options['id'],
			        htmlspecialchars($this->_options['value'])
			);
		}

		if ( ! $this->_css_rendered)
		{
			$result .= $this->get_css(TRUE);
		}

		if ( ! $this->_js_rendered)
		{
			$result .= $this->get_js(TRUE);
		}

		$result .= $template->render();

		if ($display)
		{
			echo $result;
		}
		else
		{
			return $result;
		}
	}

	/**
	 * @static
	 * @throws  Kohana_Exception
	 * @param   string $driver
	 * @param   Array  $options
	 * @return  Editor
	 */
	public static function factory($driver = NULL, array $options = array())
	{
		if ($driver === NULL)
		{
			$driver = Kohana::$config->load('editor')->get('default_driver');
		}

		$class = 'Editor_'.$driver;
		if ( ! class_exists($class))
		{
			// try to load custom configuration
            $editor = Arr::get(Kohana::$config->load('editor')->get('custom'), $driver);
			if ( $editor )
			{
				$class = 'Editor_'.$editor['driver'];
				$options = $options + Arr::get($editor, 'options', array());
			}

			if ( ! $editor OR ! class_exists($class) )
			{
				throw new Kohana_Exception('Editor driver :driver not found!', array(':driver' => $driver));
			}
		}

		return new $class($options);
	}

	public $name;

	public function __construct(array $options = NULL)
	{
        $this->_config = Arr::get(Kohana::$config->load('editor')->get('drivers'), $this->name);
		$this->_options = Arr::merge($this->_options, Arr::get($this->_config, 'options', array()), (array)$options);
		if (isset($this->_options['lang']))
		{
			$this->lang($this->_options['lang']);
		}
	}

	public function get_js($render = FALSE)
	{
		$this->_js_rendered = TRUE;
		$js = $this->_js();
		if ( empty($js) )
		{
			return;
		}

		$result = array();
		foreach($js as $filename)
		{
			if (isset(self::$_rendered['js'][$filename]))
			{
				// this script was already rendered
				continue;
			}

			self::$_rendered['js'][$filename] = $filename;

			if ($this->_js_prefix)
			{
				$filename = rtrim($this->_config['js_path'], '/').'/'.ltrim($filename, '/');
			}

			$result[] = $render === TRUE ? HTML::script($filename) : $filename;
		}

		if ($render === TRUE)
		{
			return implode(PHP_EOL, $result).PHP_EOL;
		}
		else
		{
			return $result;
		}
	}

	public function get_css($render = FALSE)
	{
		$this->_css_rendered = TRUE;
		$css = $this->_css();
		if ( empty($css) )
		{
			return;
		}

		$result = array();
		foreach($css as $filename)
		{
			if (isset(self::$_rendered['css'][$filename]))
			{
				// this style was already rendered
				continue;
			}

			self::$_rendered['css'][$filename] = $filename;

			if ($this->_css_prefix)
			{
				$filename = rtrim($this->_config['css_path'], '/').'/'.ltrim($filename, '/');
			}

			$result[] = $render === TRUE ? HTML::style($filename) : $filename;
		}

		if ($render === TRUE)
		{
			return implode(PHP_EOL, $result).PHP_EOL;
		}
		else
		{
			return $result;
		}
	}

	/**
	 * @param  string $name
	 * @param  mixed  $value
	 * @return Editor|mixed
	 */
	public function options($name = NULL, $value = NULL)
	{
		if ($name === NULL)
		{
			return $this->_options;
		}

		if (is_array($name))
		{
			$this->_options = $name + $this->_options;
		}
		elseif (func_num_args() < 2)
		{
			return Arr::get($this->_options, $name);
		}
		else
		{
			$this->_options[$name] = $value;
		}

		return $this;
	}

	public function lang($lang = NULL)
	{
		if ($lang === NULL)
		{
			if (empty($this->_lang))
			{
				$this->lang(I18n::lang());
			}

			return $this->_lang;
		}

		$this->_lang = strtolower(substr($lang, 0, 2));

		return $this;
	}

	/**
	 * Shorthand for $editor->options('value', $value);
	 *
	 * @param  string $value
	 * @return Editor
	 */
	public function value($value = NULL)
	{
		$this->_options['value'] = $value;
		return $this;
	}

	public function template($template)
	{
		$this->template = $template;
		return $this;
	}

}
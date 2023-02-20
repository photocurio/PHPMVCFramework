<?php

namespace app\core\form;

use app\core\Model;

/**
 * Class Field
 *
 * @author  Zura Sekhniashvili <zurasekhniashvili@gmail.com>
 * @package core\form
 */
class Field
{
    public Model $model;
    public string $attribute;
    public string $type;

    public const TYPE_TEXT = 'text';
    public const TYPE_PASSWORD = 'password';
    // public const TYPE_EMAIL = 'email';

    public function __construct(Model $model, string $attribute)
    {
        $this->model = $model;
        $this->type = self::TYPE_TEXT;
        $this->attribute = $attribute;
    }

    public function __toString()
    {
        return sprintf(
            '
			<div class="form-group">
				<label>%s</label>
				<input type="%s" name="%s" value="%s" class="form-control %s" />
				<div class="invalid-feedback">%s</div>
			</div>
			',
            $this->attribute,
            $this->type,
            $this->attribute,
            $this->model->{$this->attribute},
            $this->model->hasError($this->attribute) ? 'is-invalid' : '',
            $this->model->getFirstError($this->attribute)
        );
    }

    public function passwordField()
    {
        $this->type = self::TYPE_PASSWORD;
        return $this;
    }
}

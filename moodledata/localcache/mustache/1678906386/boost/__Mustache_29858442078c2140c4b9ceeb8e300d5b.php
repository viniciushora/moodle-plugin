<?php

class __Mustache_29858442078c2140c4b9ceeb8e300d5b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '
';
        $value = $context->find('hasstrings');
        if (empty($value)) {
            
            $buffer .= $indent . '    ';
            $value = $this->resolveValue($context->find('nostrings'), $context);
            $buffer .= ($value === null ? '' : $value);
            $buffer .= '
';
        }
        $value = $context->find('hasstrings');
        $buffer .= $this->sectionB9fa98fe1a9138a9666a99b681ecf285($context, $indent, $value);

        return $buffer;
    }

    private function section9c3f383e742e0076ba43b0782ab18655(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'savecontinue, tool_customlang';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'savecontinue, tool_customlang';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE3af6584ee6f55bc20c163c14a30d8a3(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'savecheckin, tool_customlang';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'savecheckin, tool_customlang';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA0a7a7a5f371da3b4a4b62fded8c7336(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'headingcomponent, tool_customlang';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'headingcomponent, tool_customlang';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section786d1ad51a00cbbf97599d18e4ac1d1b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'headingstringid, tool_customlang';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'headingstringid, tool_customlang';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAf4fb7fcfe9679c26779d38bc01fa8bf(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'headingstandard, tool_customlang';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'headingstandard, tool_customlang';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section59a339a1d9f3a5518873897e9e4098e1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'headinglocal, tool_customlang';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'headinglocal, tool_customlang';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC37fd3c209faba1215d50a2b7cec7348(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'list-group-item-info';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'list-group-item-info';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section4b91ad2f89a25afe640d05e4c2c8c75b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'list-group-item-warning';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'list-group-item-warning';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAdfd8096c0f3f658a3a45be0cd39d499(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="alert-secondary mt-3 mt-1">
                        {{ original }}
                    </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="alert-secondary mt-3 mt-1">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('original'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section21f57dc1931af0dc22359202f183a071(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'markuptodate, tool_customlang';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'markuptodate, tool_customlang';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA2f6667ca3bc9c8460609ebe4266e231(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                        <div class="uptodatewrapper">
                            <div class="form-check">
                                <input id="update_{{id}}" class="form-check-input" name="updates[]" type="checkbox" value="{{id}}">
                                <label for="update_{{id}}" class="form-check-label">{{#str}}markuptodate, tool_customlang{{/str}}</label>
                                {{{ outdatedhelp }}}
                            </div>
                        </div>
                        ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                        <div class="uptodatewrapper">
';
                $buffer .= $indent . '                            <div class="form-check">
';
                $buffer .= $indent . '                                <input id="update_';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="form-check-input" name="updates[]" type="checkbox" value="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                                <label for="update_';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="form-check-label">';
                $value = $context->find('str');
                $buffer .= $this->section21f57dc1931af0dc22359202f183a071($context, $indent, $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('outdatedhelp'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                            </div>
';
                $buffer .= $indent . '                        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE557a9679dc0254b098ef91e22d53ff4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <div class="container-fluid list-group-item
                {{#local}}list-group-item-info{{/local}}
                {{#outdated}}list-group-item-warning{{/outdated}}
                {{#modified}}list-group-item-info{{/modified}}"
            >
            <div class="row">
                <div class="col-sm-4 col-md-2 text-break">
                    <div class="d-md-none">
                        <strong>{{#str}}headingcomponent, tool_customlang{{/str}}</strong>
                    </div>
                    {{{ component }}}
                </div>
                <div class="col-sm-4 col-md-2 text-break">
                    <div class="d-md-none">
                        <strong>{{#str}}headingstringid, tool_customlang{{/str}}</strong>
                    </div>
                    {{{ stringid }}}
                </div>
                <div class="col-sm-4 col-md-2">
                    <div class="d-md-none">
                        <strong>{{#str}}headingstandard, tool_customlang{{/str}}</strong>
                    </div>
                    {{ master }}
                    <div class="info">
                        {{{ placeholderhelp }}}
                        {{{ outdatedhelp}}}
                    </div>
                    {{#showoriginalvsmaster}}
                    <div class="alert-secondary mt-3 mt-1">
                        {{ original }}
                    </div>
                    {{/showoriginalvsmaster}}
                </div>
                <div class="col-sm-12 col-md-6 mt-sm-3 mt-md-0">
                    <div class="d-md-none">
                        <strong>{{#str}}headinglocal, tool_customlang{{/str}}</strong>
                    </div>
                    <div class="py-2 py-md-0 px-md-3">
                        <label for="{{id}}" class="sr-only sr-only-focusable">{{{ component }}}/{{{ stringid }}}</label>
                        <textarea class="form-control w-100 border-box" id="{{id}}" name="cust[{{id}}]" cols="40" rows="3">{{{ local }}}</textarea>
                        {{#checkupdated}}
                        <div class="uptodatewrapper">
                            <div class="form-check">
                                <input id="update_{{id}}" class="form-check-input" name="updates[]" type="checkbox" value="{{id}}">
                                <label for="update_{{id}}" class="form-check-label">{{#str}}markuptodate, tool_customlang{{/str}}</label>
                                {{{ outdatedhelp }}}
                            </div>
                        </div>
                        {{/checkupdated}}
                    </div>
                </div>
            </div>
        </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <div class="container-fluid list-group-item
';
                $buffer .= $indent . '                ';
                $value = $context->find('local');
                $buffer .= $this->sectionC37fd3c209faba1215d50a2b7cec7348($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $context->find('outdated');
                $buffer .= $this->section4b91ad2f89a25afe640d05e4c2c8c75b($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                ';
                $value = $context->find('modified');
                $buffer .= $this->sectionC37fd3c209faba1215d50a2b7cec7348($context, $indent, $value);
                $buffer .= '"
';
                $buffer .= $indent . '            >
';
                $buffer .= $indent . '            <div class="row">
';
                $buffer .= $indent . '                <div class="col-sm-4 col-md-2 text-break">
';
                $buffer .= $indent . '                    <div class="d-md-none">
';
                $buffer .= $indent . '                        <strong>';
                $value = $context->find('str');
                $buffer .= $this->sectionA0a7a7a5f371da3b4a4b62fded8c7336($context, $indent, $value);
                $buffer .= '</strong>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('component'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="col-sm-4 col-md-2 text-break">
';
                $buffer .= $indent . '                    <div class="d-md-none">
';
                $buffer .= $indent . '                        <strong>';
                $value = $context->find('str');
                $buffer .= $this->section786d1ad51a00cbbf97599d18e4ac1d1b($context, $indent, $value);
                $buffer .= '</strong>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('stringid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="col-sm-4 col-md-2">
';
                $buffer .= $indent . '                    <div class="d-md-none">
';
                $buffer .= $indent . '                        <strong>';
                $value = $context->find('str');
                $buffer .= $this->sectionAf4fb7fcfe9679c26779d38bc01fa8bf($context, $indent, $value);
                $buffer .= '</strong>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    ';
                $value = $this->resolveValue($context->find('master'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '
';
                $buffer .= $indent . '                    <div class="info">
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('placeholderhelp'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                        ';
                $value = $this->resolveValue($context->find('outdatedhelp'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $value = $context->find('showoriginalvsmaster');
                $buffer .= $this->sectionAdfd8096c0f3f658a3a45be0cd39d499($context, $indent, $value);
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="col-sm-12 col-md-6 mt-sm-3 mt-md-0">
';
                $buffer .= $indent . '                    <div class="d-md-none">
';
                $buffer .= $indent . '                        <strong>';
                $value = $context->find('str');
                $buffer .= $this->section59a339a1d9f3a5518873897e9e4098e1($context, $indent, $value);
                $buffer .= '</strong>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                    <div class="py-2 py-md-0 px-md-3">
';
                $buffer .= $indent . '                        <label for="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="sr-only sr-only-focusable">';
                $value = $this->resolveValue($context->find('component'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '/';
                $value = $this->resolveValue($context->find('stringid'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</label>
';
                $buffer .= $indent . '                        <textarea class="form-control w-100 border-box" id="';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" name="cust[';
                $value = $this->resolveValue($context->find('id'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ']" cols="40" rows="3">';
                $value = $this->resolveValue($context->find('local'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</textarea>
';
                $value = $context->find('checkupdated');
                $buffer .= $this->sectionA2f6667ca3bc9c8460609ebe4266e231($context, $indent, $value);
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB9fa98fe1a9138a9666a99b681ecf285(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
<form method="post" action="{{{formurl}}}">
    <input type="hidden" name="translatorsubmitted" value="1">
    <input type="hidden" name="sesskey" value="{{{ sesskey }}}">
    <input type="hidden" name="p" value="{{ currentpage }}">

    <fieldset class="m-3">
        <button type="submit" name="savecontinue" class="btn btn-secondary">
            {{#str}}savecontinue, tool_customlang{{/str}}
        </button>
        <button type="submit" name="savecheckin" class="btn btn-secondary">
            {{#str}}savecheckin, tool_customlang{{/str}}
        </button>
    </fieldset>

    <div class="list-group">
        <div class="container-fluid d-none d-md-block list-group-item border-bottom-0">
            <div class="row">
                <div class="col-sm-4 col-md-2">
                    <strong>{{#str}}headingcomponent, tool_customlang{{/str}}</strong>
                </div>
                <div class="col-sm-4 col-md-2">
                    <strong>{{#str}}headingstringid, tool_customlang{{/str}}</strong>
                </div>
                <div class="col-sm-4 col-md-2">
                    <strong>{{#str}}headingstandard, tool_customlang{{/str}}</strong>
                </div>
                <div class="col-sm-12 col-md-6">
                    <span class="pl-3">
                        <strong>{{#str}}headinglocal, tool_customlang{{/str}}</strong>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="list-group">
    {{#strings}}
        <div class="container-fluid list-group-item
                {{#local}}list-group-item-info{{/local}}
                {{#outdated}}list-group-item-warning{{/outdated}}
                {{#modified}}list-group-item-info{{/modified}}"
            >
            <div class="row">
                <div class="col-sm-4 col-md-2 text-break">
                    <div class="d-md-none">
                        <strong>{{#str}}headingcomponent, tool_customlang{{/str}}</strong>
                    </div>
                    {{{ component }}}
                </div>
                <div class="col-sm-4 col-md-2 text-break">
                    <div class="d-md-none">
                        <strong>{{#str}}headingstringid, tool_customlang{{/str}}</strong>
                    </div>
                    {{{ stringid }}}
                </div>
                <div class="col-sm-4 col-md-2">
                    <div class="d-md-none">
                        <strong>{{#str}}headingstandard, tool_customlang{{/str}}</strong>
                    </div>
                    {{ master }}
                    <div class="info">
                        {{{ placeholderhelp }}}
                        {{{ outdatedhelp}}}
                    </div>
                    {{#showoriginalvsmaster}}
                    <div class="alert-secondary mt-3 mt-1">
                        {{ original }}
                    </div>
                    {{/showoriginalvsmaster}}
                </div>
                <div class="col-sm-12 col-md-6 mt-sm-3 mt-md-0">
                    <div class="d-md-none">
                        <strong>{{#str}}headinglocal, tool_customlang{{/str}}</strong>
                    </div>
                    <div class="py-2 py-md-0 px-md-3">
                        <label for="{{id}}" class="sr-only sr-only-focusable">{{{ component }}}/{{{ stringid }}}</label>
                        <textarea class="form-control w-100 border-box" id="{{id}}" name="cust[{{id}}]" cols="40" rows="3">{{{ local }}}</textarea>
                        {{#checkupdated}}
                        <div class="uptodatewrapper">
                            <div class="form-check">
                                <input id="update_{{id}}" class="form-check-input" name="updates[]" type="checkbox" value="{{id}}">
                                <label for="update_{{id}}" class="form-check-label">{{#str}}markuptodate, tool_customlang{{/str}}</label>
                                {{{ outdatedhelp }}}
                            </div>
                        </div>
                        {{/checkupdated}}
                    </div>
                </div>
            </div>
        </div>
    {{/strings}}
    </div>

    <fieldset class="m-3">
        <button type="submit" name="savecontinue" class="btn btn-secondary">
            {{#str}}savecontinue, tool_customlang{{/str}}
        </button>
        <button type="submit" name="savecheckin" class="btn btn-secondary">
            {{#str}}savecheckin, tool_customlang{{/str}}
        </button>
    </fieldset>
</form>
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '<form method="post" action="';
                $value = $this->resolveValue($context->find('formurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '    <input type="hidden" name="translatorsubmitted" value="1">
';
                $buffer .= $indent . '    <input type="hidden" name="sesskey" value="';
                $value = $this->resolveValue($context->find('sesskey'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">
';
                $buffer .= $indent . '    <input type="hidden" name="p" value="';
                $value = $this->resolveValue($context->find('currentpage'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <fieldset class="m-3">
';
                $buffer .= $indent . '        <button type="submit" name="savecontinue" class="btn btn-secondary">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->section9c3f383e742e0076ba43b0782ab18655($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '        <button type="submit" name="savecheckin" class="btn btn-secondary">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->sectionE3af6584ee6f55bc20c163c14a30d8a3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '    </fieldset>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="list-group">
';
                $buffer .= $indent . '        <div class="container-fluid d-none d-md-block list-group-item border-bottom-0">
';
                $buffer .= $indent . '            <div class="row">
';
                $buffer .= $indent . '                <div class="col-sm-4 col-md-2">
';
                $buffer .= $indent . '                    <strong>';
                $value = $context->find('str');
                $buffer .= $this->sectionA0a7a7a5f371da3b4a4b62fded8c7336($context, $indent, $value);
                $buffer .= '</strong>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="col-sm-4 col-md-2">
';
                $buffer .= $indent . '                    <strong>';
                $value = $context->find('str');
                $buffer .= $this->section786d1ad51a00cbbf97599d18e4ac1d1b($context, $indent, $value);
                $buffer .= '</strong>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="col-sm-4 col-md-2">
';
                $buffer .= $indent . '                    <strong>';
                $value = $context->find('str');
                $buffer .= $this->sectionAf4fb7fcfe9679c26779d38bc01fa8bf($context, $indent, $value);
                $buffer .= '</strong>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '                <div class="col-sm-12 col-md-6">
';
                $buffer .= $indent . '                    <span class="pl-3">
';
                $buffer .= $indent . '                        <strong>';
                $value = $context->find('str');
                $buffer .= $this->section59a339a1d9f3a5518873897e9e4098e1($context, $indent, $value);
                $buffer .= '</strong>
';
                $buffer .= $indent . '                    </span>
';
                $buffer .= $indent . '                </div>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <div class="list-group">
';
                $value = $context->find('strings');
                $buffer .= $this->sectionE557a9679dc0254b098ef91e22d53ff4($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <fieldset class="m-3">
';
                $buffer .= $indent . '        <button type="submit" name="savecontinue" class="btn btn-secondary">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->section9c3f383e742e0076ba43b0782ab18655($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '        <button type="submit" name="savecheckin" class="btn btn-secondary">
';
                $buffer .= $indent . '            ';
                $value = $context->find('str');
                $buffer .= $this->sectionE3af6584ee6f55bc20c163c14a30d8a3($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '        </button>
';
                $buffer .= $indent . '    </fieldset>
';
                $buffer .= $indent . '</form>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

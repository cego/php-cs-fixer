<?php

namespace Cego;

class CegoRuleSet
{
    /**
     * Returns the CEGO ruleset
     *
     * @return array
     */
    public static function get(): array
    {
        return [
            '@PSR12'                              => true,
            'no_blank_lines_after_phpdoc'         => true,
            'no_empty_phpdoc'                     => true,
            'no_unused_imports'                   => true,
            'not_operator_with_space'             => true,
            'phpdoc_indent'                       => true,
            'phpdoc_scalar'                       => true,
            'phpdoc_trim'                         => true,
            'phpdoc_separation'                   => true,
            'phpdoc_no_useless_inheritdoc'        => true,
            'phpdoc_var_annotation_correct_order' => true,
            'phpdoc_order'                        => true,
            'trailing_comma_in_multiline'         => true,
            'object_operator_without_whitespace'  => true,
            'full_opening_tag'                    => true,
            'whitespace_after_comma_in_array'     => true,
            'single_quote'                        => true,
            'ternary_to_null_coalescing'          => true,

            'return_type_declaration'                 => ['space_before' => 'none'],
            'array_syntax'                            => ['syntax' => 'short'],
            'no_extra_blank_lines'                    => ['tokens' => ['extra']],
            'concat_space'                            => ['spacing' => 'one'],
            'ordered_imports'                         => ['sort_algorithm' => 'length'],
            'binary_operator_spaces'                  => ['operators' => ['=>' => 'align_single_space_minimal']],
            'class_attributes_separation'             => ['elements' => ['method' => 'one']],
            'blank_line_before_statement'             => ['statements' => ['break', 'continue', 'declare', 'return', 'throw', 'try', 'for', 'foreach', 'if', 'switch', 'do', 'while']],
            'ErickSkrauch/align_multiline_parameters' => ['variables' => true],

            'method_argument_space' => [
                'keep_multiple_spaces_after_comma' => false,
                'on_multiline'                     => 'ignore',
                'after_heredoc'                    => true,
            ],
            'echo_tag_syntax'       => [
                'format'                         => 'short',
                'shorten_simple_statements_only' => false,
            ],
        ];
    }
}

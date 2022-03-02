<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TreeDataController extends Controller
{
    public function index()
    {
        $flatArray = [
            0 => [
                "func_id" => 264,
                "func_table_name" => "Account Manager",
                "func_name" => "api.account.manager.view",
                "function_type" => "view",
                "parent_id" => 0,
                "is_active" => 0,
            ],
            1 => [
                "func_id" => 265,
                "func_table_name" => "Account Manager",
                "func_name" => "api.account.manager.manage",
                "function_type" => "manage",
                "parent_id" => 0,
                "is_active" => 0,
            ],
            2 => [
                "func_id" => 271,
                "func_table_name" => "Accounts",
                "func_name" => "api.accounts.manage",
                "function_type" => "manage",
                "parent_id" => 264,
                "is_active" => 0,
            ],
            3 => [
                "func_id" => 270,
                "func_table_name" => "Accounts",
                "func_name" => "api.accounts.view",
                "function_type" => "view",
                "parent_id" => 264,
                "is_active" => 0,
            ],
            4 => [
                "func_id" => 214,
                "func_table_name" => "Billing History",
                "func_name" => "api.billing.history.view",
                "function_type" => "view",
                "parent_id" => null,
                "is_active" => null,
            ],
            5 => [
                "func_id" => 279,
                "func_table_name" => "Billing History",
                "func_name" => "api.admin.billing.history.manage",
                "function_type" => "manage",
                "parent_id" => 266,
                "is_active" => null,
            ],
            6 => [
                "func_id" => 278,
                "func_table_name" => "Billing History",
                "func_name" => "api.admin.billing.history.view",
                "function_type" => "view",
                "parent_id" => 266,
                "is_active" => null,
            ],
            7 => [
                "func_id" => 276,
                "func_table_name" => "Billing Programs",
                "func_name" => "api.sub.billing.programs.view",
                "function_type" => "view",
                "parent_id" => 266,
                "is_active" => null,
            ],
            8 => [
                "func_id" => 277,
                "func_table_name" => "Billing Programs",
                "func_name" => "api.sub.billing.programs.manage",
                "function_type" => "manage",
                "parent_id" => 266,
                "is_active" => null,
            ],
            9 => [
                "func_id" => 267,
                "func_table_name" => "Billing Programs",
                "func_name" => "api.billing.programs.manage",
                "function_type" => "manage",
                "parent_id" => 0,
                "is_active" => null,
            ],
            10 => [
                "func_id" => 266,
                "func_table_name" => "Billing Programs",
                "func_name" => "api.billing.programs.view",
                "function_type" => "view",
                "parent_id" => 0,
                "is_active" => null,
            ],
            11 => [
                "func_id" => 283,
                "func_table_name" => "Cemetery Portal",
                "func_name" => "api.cemetery.portal.manage",
                "function_type" => "manage",
                "parent_id" => 268,
                "is_active" => null,
            ],
            12 => [
                "func_id" => 282,
                "func_table_name" => "Cemetery Portal",
                "func_name" => "api.cemetery.portal.view",
                "function_type" => "view",
                "parent_id" => 268,
                "is_active" => null,
            ],
            13 => [
                "func_id" => 285,
                "func_table_name" => "General",
                "func_name" => "api.general.manage",
                "function_type" => "manage",
                "parent_id" => 268,
                "is_active" => null,
            ],
            14 => [
                "func_id" => 284,
                "func_table_name" => "General",
                "func_name" => "api.general.view",
                "function_type" => "view",
                "parent_id" => 268,
                "is_active" => null,
            ],
            15 => [
                "func_id" => 269,
                "func_table_name" => "General Configuration",
                "func_name" => "api.general.configuration.manage",
                "function_type" => "manage",
                "parent_id" => 0,
                "is_active" => null,
            ],
            16 => [
                "func_id" => 268,
                "func_table_name" => "General Configuration",
                "func_name" => "api.general.configuration.view",
                "function_type" => "view",
                "parent_id" => 0,
                "is_active" => null,
            ],
            17 => [
                "func_id" => 280,
                "func_table_name" => "Generate Invoices",
                "func_name" => "api.generate.invoices.view",
                "function_type" => "view",
                "parent_id" => 266,
                "is_active" => null,
            ],
            18 => [
                "func_id" => 281,
                "func_table_name" => "Generate Invoices",
                "func_name" => "api.generate.invoices.manage",
                "function_type" => "manage",
                "parent_id" => 266,
                "is_active" => null,
            ],
            19 => [
                "func_id" => 273,
                "func_table_name" => "Languages",
                "func_name" => "api.languages.manage",
                "function_type" => "manage",
                "parent_id" => 264,
                "is_active" => 0,
            ],
            20 => [
                "func_id" => 272,
                "func_table_name" => "Languages",
                "func_name" => "api.languages.view",
                "function_type" => "view",
                "parent_id" => 264,
                "is_active" => 0,
            ],
            21 => [
                "func_id" => 290,
                "func_table_name" => "Log in to an Account",
                "func_name" => "api.log.in.to.an.account.view",
                "function_type" => "view",
                "parent_id" => 270,
                "is_active" => 0,
            ],
            22 => [
                "func_id" => 291,
                "func_table_name" => "Log in to an Account",
                "func_name" => "api.log.in.to.an.account.manage",
                "function_type" => "manage",
                "parent_id" => 270,
                "is_active" => 0,
            ],
            23 => [
                "func_id" => 295,
                "func_table_name" => "Manage Service Types",
                "func_name" => "api.manage.service.types.manage",
                "function_type" => "manage",
                "parent_id" => 282,
                "is_active" => null,
            ],
            24 => [
                "func_id" => 294,
                "func_table_name" => "Manage Service Types",
                "func_name" => "api.manage.service.types.view",
                "function_type" => "view",
                "parent_id" => 282,
                "is_active" => null,
            ],
            25 => [
                "func_id" => 292,
                "func_table_name" => "Manage Transaction Types",
                "func_name" => "api.manage.transaction.types.view",
                "function_type" => "view",
                "parent_id" => 282,
                "is_active" => null,
            ],
            26 => [
                "func_id" => 293,
                "func_table_name" => "Manage Transaction Types",
                "func_name" => "api.manage.transaction.types.manage",
                "function_type" => "manage",
                "parent_id" => 282,
                "is_active" => null,
            ],
            27 => [
                "func_id" => 288,
                "func_table_name" => "Portals & Modules",
                "func_name" => "api.portals.&.modules.view",
                "function_type" => "view",
                "parent_id" => 268,
                "is_active" => null,
            ],
            28 => [
                "func_id" => 289,
                "func_table_name" => "Portals & Modules",
                "func_name" => "api.portals.&.modules.manage",
                "function_type" => "manage",
                "parent_id" => 268,
                "is_active" => null,
            ],
            29 => [
                "func_id" => 286,
                "func_table_name" => "RecordKeepr",
                "func_name" => "api.recordKeepr.view",
                "function_type" => "view",
                "parent_id" => 268,
                "is_active" => null,
            ],
            30 => [
                "func_id" => 287,
                "func_table_name" => "RecordKeepr",
                "func_name" => "api.recordKeepr.manage",
                "function_type" => "manage",
                "parent_id" => 268,
                "is_active" => null,
            ],
            31 => [
                "func_id" => 275,
                "func_table_name" => "Registration",
                "func_name" => "api.registration.manage",
                "function_type" => "manage",
                "parent_id" => 264,
                "is_active" => 0,
            ],
            32 => [
                "func_id" => 274,
                "func_table_name" => "Registration",
                "func_name" => "api.registration.view",
                "function_type" => "view",
                "parent_id" => 264,
                "is_active" => 0,
            ],
            33 => [
                "func_id" => 296,
                "func_table_name" => "Screen Categories",
                "func_name" => "api.screen.categories.view",
                "function_type" => "view",
                "parent_id" => 282,
                "is_active" => null,
            ],
            34 => [
                "func_id" => 297,
                "func_table_name" => "Screen Categories",
                "func_name" => "api.screen.categories.manage",
                "function_type" => "manage",
                "parent_id" => 282,
                "is_active" => null,
            ]
        ];

        //sorting array to view permission front
        $sortArray = array_column($flatArray, 'function_type');
        array_multisort($sortArray, SORT_DESC, $flatArray);

        //getting tree structure array
        $treeStructureArray = $this->_buildTreeStructureArray($flatArray);

        //grouping tree structure array by function table name
        $treeStructureArrayGrouped =  $this->_groupTreeStructureArray($treeStructureArray);

        return response()->json(['data'=>$treeStructureArrayGrouped]);
    }

    private function _setClassName($funcNames)
    {
        $class = [];
        foreach ($funcNames as $funcName) {
            $removeFunctionType = array_slice(explode(".", $funcName), 0, count(explode(".", $funcName)) - 1);
            array_push($class, implode(".", $removeFunctionType));
        }
        $classNames = implode(" ", $class);
        return str_replace('.', '_', $classNames);
    }

    private function _buildTreeStructureArray(array $functions)
    {
        $grouped = [];
        foreach ($functions as $node) {
            if ($node['parent_id'] == 0) {
                $node['parent_class'] = '';
            } else {
                foreach ($functions as $node2) {
                    if ($node2['func_id'] == $node['parent_id']) {
                        $node['parent_class'] = $this->_setClassName(explode(" ", $node2['func_name']));
                    }
                }
            }
            $grouped[$node['parent_id']][] = $node;
        }

        $buildTree = function ($siblings) use (&$buildTree, $grouped, $functions) {
            foreach ($siblings as $k => $sibling) {
                $id = $sibling['func_id'];
                if (isset($grouped[$id])) {
                    $sibling['children'] = $buildTree($grouped[$id]);
                }
                $siblings[$k] = $sibling;
            }
            return $siblings;
        };
        return $buildTree($grouped[0]);
    }

    private function _groupTreeStructureArray($treeStructureArray)
    {
        $groupedByFuncTableName = array_reduce($treeStructureArray, function (array $accumulator, array $element) {
            if (isset($element['children'])) {
                $element['children'] = $this->_groupTreeStructureArray($element['children']);
            }
            $accumulator[$element['func_table_name']][] = $element;

            return $accumulator;
        }, []);
        return $groupedByFuncTableName;
    }

}
